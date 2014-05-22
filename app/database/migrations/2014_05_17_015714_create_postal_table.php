<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postal_code', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('country_code', 2);
            $table->string('postal_code', 20);
            $table->string('place_name', 180);
            $table->string('state_name', 100);
            $table->string('state_code', 20);
            $table->string('province_name', 100);
            $table->string('province_code', 20);
            $table->string('community_name', 100);
            $table->string('community_code', 20);
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->tinyInteger('accuracy');

            // Add indexes for search purposes
            $table->index('country_code');
            $table->index('postal_code');
            $table->index('state_code');
            $table->index('latitude');
            $table->index('longitude');
        });

        // Load the postal code data into the table.
        if (Schema::hasTable('postal')) {
            $basePath = app_path() . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR
                . 'geonames' . DIRECTORY_SEPARATOR . 'postal' . DIRECTORY_SEPARATOR;
            $zipPath = $basePath . 'allCountries.zip';
            $txtPath = $basePath . 'allCountries.txt';

            // Unzip the postal zip file
            $zip = new ZipArchive();
            $file = $zip->open($zipPath);
            if ($file === true) {
                echo "Extracting postal data file...\n";
                $zip->extractTo($basePath);
                echo "Done.\n\n";

                echo "Importing the large postal data...\n";
                echo "Please be patient as this may take a while (~5 mins).\n";
                $query = sprintf("LOAD DATA LOCAL INFILE '%s' INTO TABLE "
                    . "postal(country_code, postal_code, place_name, state_name, state_code, province_name, province_code, "
                    . "community_name, community_code, latitude, longitude, accuracy)", addslashes($txtPath));
                DB::connection()->getPdo()->exec($query);
                echo "Done.\n\n";

                // Clean up and remove the uncompressed data file.
                if (is_readable($txtPath)) {
                    unlink($txtPath);
                }
            } else {
                echo "Warning! File containing the data to be imported to the postal table is missing.";
            }
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('postal');
	}

}
