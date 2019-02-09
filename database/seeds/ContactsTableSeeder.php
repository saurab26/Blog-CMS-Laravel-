<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $contacts = [];
                $contacts[] =[
                    'name'=> $faker->name,
                    'email'=> $faker->email,
                    'address'=> $faker->domainName,
                    'phone'=>$faker->tollFreePhoneNumber,
                    'body'=> $faker->paragraphs(rand(1,5), true),
                    'created_at'=> $commentDate,
                    'updated_at'=> $commentDate,
                ];
           
        
    //    Comment::delete();
       Contact::insert($contacts); 
    }
}
