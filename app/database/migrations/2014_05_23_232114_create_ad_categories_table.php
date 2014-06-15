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
                [
                    'parent' => 'classified_ads',
                    'sub' => [
                        'appliances',
                        'arts_and_crafts',
                        'books',
                        'clothing',
                        'computers',
                        'electronics',
                        'food',
                        'furniture',
                        'health_and_beauty',
                        'jobs',
                        'pets',
                        'phones_and_handhelds',
                        'services',
                        'sports_and_hobbies',
                        'toys_and_videos',
                        'travel',
                        'others',
                    ],
                ],
                [
                    'parent' => 'real_estate',
                    'sub' => [
                        'apartments',
                        'condiminiums',
                        'beach_resort',
                        'commercial_and_industrial',
                        'house_and_lot',
                        'land_and_farm',
                        'real_estate_rent',
                        'rooms_and_beds',
                    ],
                ],
                [
                    'parent' => 'vehicles',
                    'sub' => [
                        'parts_and_accessories',
                        'cars',
                        'motorcycles',
                        'trucks',
                        'vans',
                        'vehicles_rent',
                        'other_vehicles',
                    ]
                ],
            ];

            foreach ($categories as $category) {
                $parentId = DB::table('ad_categories')->insertGetId(
                    ['name' => $category['parent'], 'parent_id' => NULL]
                );

                foreach ($category['sub'] as $subCategory) {
                    DB::table('ad_categories')->insert(
                        ['name' => $subCategory, 'parent_id' => $parentId]
                    );
                }
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
