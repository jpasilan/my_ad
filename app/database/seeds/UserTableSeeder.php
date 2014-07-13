<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $userGroups = [
            'administrator' => [
                'groups' => ['administrator'],
                'users' => [
                    ['email' => 'admin@example.com', 'first_name' => 'Admin', 'last_name' => 'Example'],
                ]
            ],
            'buyer_seller' => [
                'groups' => ['buyer', 'seller'],
                'users' => [
                    ['email' => 'seller@example.com', 'first_name' => 'Seller', 'last_name' => 'Example'],
                ]
            ],
        ];

        foreach ($userGroups as $ug) {
            $sentryGroups = [];
            foreach ($ug['groups'] as $g) {
                $sentryGroups[] = Sentry::findGroupByName($g);
            }

            foreach ($ug['users'] as $user) {
                try {
                    $sentryUser = Sentry::register([
                        'first_name'    => $user['first_name'],
                        'last_name'     => $user['last_name'],
                        'email'         => $user['email'],
                        'password'      => 'Test1234',
                    ], true);

                    foreach ($sentryGroups as $sg) {
                        $sentryUser->addGroup($sg);
                    }

                    $this->command->info('Created user: ' . $user['email']);
                } catch (Cartalyst\Sentry\Users\UserExistsException $e) {
                    $this->command->info('User ' . $user['email'] . ' already exists.');
                }
            }
        }
    }

} 