<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        // 	'name' => 'John Doe',
        // 	'email'=> 'demo@demo.com',
        // 	'password'=>bcrypt('secret'),
        // ]);


        $users = [
        	['name' => 'John Doe',
        	'email'=> 'demo@demo.com',
        	'password'=>bcrypt('secret')
        	],

        	['name' => 'Richard Downs',
        	'email'=> 'radowns82@gmail.com',
        	'password'=>bcrypt('Jesus777!')
        	],
        ];

        foreach ($users as $user){
        	User::create($user);
        }
    }
}
