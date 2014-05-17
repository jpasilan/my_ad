<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function(Blueprint $table)
        {
            $table->char('id', 2); // Known as the iso_alpha2
            $table->char('iso_alpha3', 3);
            $table->integer('iso_numeric');
            $table->string('fips_code', 3);
            $table->string('name', 200);
            $table->string('capital', 200);
            $table->double('area_in_sq_km');
            $table->integer('population');
            $table->char('continent', 2);
            $table->char('tld', 3);
            $table->char('currency', 3);
            $table->string('currency_name', 20);
            $table->string('phone', 10);
            $table->string('postal_code_format', 20);
            $table->string('postal_code_regex', 20);
            $table->integer('geoname_id');
            $table->string('languages', 200);
            $table->string('neighbours', 20);
            $table->string('equivalent_fips_code', 10);

            $table->primary('id');
            $table->index('iso_alpha3');
            $table->index('name');
            $table->index('capital');
            $table->index('currency');
        });

        // Load country data into the countries table.
        if (Schema::hasTable('countries')) {
            $txtPath = app_path() . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR
                . 'geonames' . DIRECTORY_SEPARATOR . 'country' . DIRECTORY_SEPARATOR
                . 'countryInfo.txt';

            if (is_readable($txtPath)) {
                echo "Importing country data...\n";
                echo "Please be patient as this may take some time (~2 mins).\n";
                $query = sprintf("LOAD DATA LOCAL INFILE '%s' INTO TABLE "
                    . "countries(id, iso_alpha3, iso_numeric, fips_code, name, capital, area_in_sq_km, "
                    . "population, continent, tld, currency, currency_name, phone, postal_code_format, "
                    . "postal_code_regex, geoname_id, languages, neighbours, equivalent_fips_code)"
                    , addslashes($txtPath)
                );
                DB::connection()->getPdo()->exec($query);
                echo "Done.\n\n";
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
		Schema::dropIfExists('countries');
	}

}
