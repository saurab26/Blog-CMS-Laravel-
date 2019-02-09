<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the contacts table
        DB::table('contacts')->delete();

        $faker = Factory::create();
        $contacts = [];
                $contacts[] =[
                    'name'=> $faker->name,
                    'email'=> $faker->email,
                    'address'=> $faker->domainName,
                    'phone'=>$faker->tollFreePhoneNumber,
                    'body'=> $faker->paragraphs(rand(1,5), true),
                    'created_at'=> $createdDate,
                    'updated_at'=> $createdDate,
                ];
           
        
    
       Contact::insert($contacts); 
    }
}
