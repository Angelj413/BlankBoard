<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['user' => 'admin',
            'name' => 'Superamin',
            'last_name' => 'istra\'Thor',
            'description' => "I am the superadmin user. I have no limitations. Don't use me on production unless you need full permissions granted.",
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'created_at' => Carbon::now(),
            ],
            ['user' => 'devilu',
            'name' => 'Diseños Devilu',
            'last_name' => null,
            'description' => "I am the main administration account. Use me when you need permissions to access the app configuration.",
            'email' => 'devilu@admin.com',
            'password' => bcrypt('devilu'),
            'created_at' => Carbon::now(),
            ],
            ['user' => 'manager',
            'name' => 'Manager',
            'last_name' => null,
            'description' => "I am the manager of the app. Use me on a regular basis.",
            'email' => 'user@admin.com',
            'password' => bcrypt('manager'),
            'created_at' => Carbon::now(),
            ],
            ['user' => 'user',
            'name' => 'Default User',
            'last_name' => null,
            'description' => "I am the default user. Grant me no special permissions.",
            'email' => 'user@admin.com',
            'password' => bcrypt('user'),
            'created_at' => Carbon::now(),
            ],
        ]);
    }
}