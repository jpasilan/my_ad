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
                    'parent' => 'Buy and Sell',
                    'sub' => [
                        'Appliances',
                        'Arts and Crafts',
                        'Audio and Video Electronics',
                        'Books',
                        'Clothing',
                        'Computers',
                        'Furniture',
                        'Health and Beauty',
                        'Pets',
                        'Phones and Handhelds',
                        'Sports and Hobbies',
                        'Toys and Video Games'
                    ],
                ],
                [
                    'parent' => 'Real Estate',
                    'sub' => [
                        'Apartments',
                        'Condominiums',
                        'Beach Resort',
                        'Commercial and Industrial',
                        'House and Lot',
                        'Land and Farm',
                        'Real Estate For Rent',
                        'Rooms and Beds'
                    ],
                ],
                [
                    'parent' => 'Vehicles',
                    'sub' => [
                        'Parts and Accessories',
                        'Cars',
                        'Motorcycles',
                        'Trucks',
                        'Vans',
                        'Vehicles For Rent',
                        'Other Vehicles',
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
