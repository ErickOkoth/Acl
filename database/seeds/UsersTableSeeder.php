<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'user_type'=>'admin',
        ]);
        User::create([
            'name'=>'editor',
            'email'=>'editor@gmail.com',
            'password'=>bcrypt('password'),
            'user_type'=>'editor',
        ]);
        User::create([
            'name'=>'author',
            'email'=>'author@gmail.com',
            'password'=>bcrypt('password'),
            'user_type'=>'author'
        ]);
    }
}
