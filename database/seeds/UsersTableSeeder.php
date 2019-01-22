<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset  the uses table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3  users/author

        DB::table('users')->insert([
            [
                'name'=>"Saurab Karmacharya",
                'email'=>"saurabkarmacharya",
                'password'=>bcrypt('secert')
            ],
            [
                'name'=>"Admin admin",
                'email'=>"admin@gmail.com",
                'password'=>bcrypt('admin')
            ],
            [
                'name'=>"Ram thakur",
                'email'=>"ramthakur@gmail.com",
                'password'=>bcrypt('ram123')
            ],
        ]);
    }
}
