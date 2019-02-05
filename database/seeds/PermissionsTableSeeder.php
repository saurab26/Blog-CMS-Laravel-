<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // crud post

        $crudPost = new Permission();
        $crudPost->name = "crud-post";
        $crudPost->save();

        // crud others post

        $updateOthersPost = new Permission();
        $updateOthersPost->name = "update-others-post";
        $updateOthersPost->save();

        // delete others post

        $deleteOthersPost = new Permission();
        $deleteOthersPost->name = "delete-others-post";
        $deleteOthersPost->save();

        // crud category

        $crudCategory = new Permission();
        $crudCategory->name = "crud-category";
        $crudCategory->save();

    }
}
