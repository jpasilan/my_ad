<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ads', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('ad_category_id');
            $table->string('title', 100);
            $table->decimal('price', 10, 2);
            $table->text('description');
            $table->string('address', 255)->nullable();
            $table->string('city', 180)->nullable();
            $table->string('province', 100)->nullable();
            $table->char('country', 2)->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->enum('ad_condition', ['used', 'brand_new']);

            $table->timestamps();
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('ads');
	}

}
