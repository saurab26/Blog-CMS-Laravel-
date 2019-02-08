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
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->delete();

        
        if(env('APP_ENV') === 'local')
        {
            // generate 3  users/author
            $faker = \Faker\Factory::create();
            
            DB::table('users')->insert([
                [
                    'name'=>"Saurab Karmacharya",
                    'slug'=>"saurab-karmacharya",
                    'email'=>"saurabkarmacharya@gmail.com",
                    'password'=>bcrypt('secert'),
                    'bio'=>$faker->text(rand(250,300))
                ],
                [
                    'name'=>"Admin admin",
                    'slug'=>"admin-admmin",
                    'email'=>"admin@gmail.com",
                    'password'=>bcrypt('admin'),
                    'bio'=>$faker->text(rand(250,300))
                ],
                [
                    'name'=>"Ram thakur",
                    'slug'=>"ram-thakur",
                    'email'=>"ramthakur@gmail.com",
                    'password'=>bcrypt('ram123'),
                    'bio'=>$faker->text(rand(250,300))
                ],
            ]);
        }
        else
        {
            DB::table('users')->insert([
                [
                    'name'=>"Administrator",
                    'slug'=>"administrator",
                    'email'=>"admin@gmail.com",
                    'password'=>bcrypt('admin'),
                    'bio'=>"I'm Administrator"
                ] 
            ]);
        }
    }
}
