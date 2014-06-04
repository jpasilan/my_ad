<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGroups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$groups = [
            'admin' => [
                'name' => 'administrator',
                'permissions' => [
                    'user.create' => 1,
                    'user.delete' => 1,
                    'user.update' => 1,
                    'user.view' => 1,
                    'ad.create' => 1,
                    'ad.delete' => 1,
                    'ad.update' => 1,
                    'ad.view' => 1,
                ],
            ],
            'buyer' => [
                'name' => 'buyer',
                'permissions' => [
                    'user.create' => 0,
                    'user.delete' => 0,
                    'user.update' => 0,
                    'user.view' => 1,
                    'profile.create' => 1,
                    'profile.delete' => 1,
                    'profile.update' => 1,
                    'profile.view' => 1,
                ],
            ],
            'seller' => [
                'name' => 'seller',
                'permissions' => [
                    'ad.create' => 1,
                    'ad.delete' => 1,
                    'ad.update' => 1,
                    'ad.view' => 1,
                ],
            ],
        ];

        foreach ($groups as $group) {
            Sentry::createGroup($group);
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$groups = ['administrator', 'buyer', 'seller'];

        foreach ($groups as $group) {
            $sentryGroup = Sentry::findGroupByName($group);
            $sentryGroup->delete();
        }
	}

}
