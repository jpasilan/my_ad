<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ad_categories', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('parent_id')->nullable();
            $table->string('name');
        });

        if (Schema::hasTable('ad_categories')) {
            $categories = [
                'vehicles',
                'real_estate',
                'electronics',
                'computers',
                'furniture',
                'tools',
                'pets',
                'jobs',
                'travel',
                'sports',
                'family',
                'services',
                'food',
                'community',
                'dating',
                'others',
            ];

            foreach ($categories as $category) {
                DB::table('ad_categories')->insert(
                    ['name' => $category, 'parent_id' => NULL]
                );
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
		Schema::dropIfExists('ad_categories');
	}

}
