<?php

use Illuminate\Database\Seeder;
use App\CategoryMaster;

class CategoryMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryMaster::create(
            [
                'cat_name' => 'Chicken',
                'cat_image' => 'cat7.png',
                'cat_description' => 'test description',
                'cat_status' => '1',
            ]
        );

        CategoryMaster::create(
            [
                'cat_name' => 'Burgers & Sandwiches',
                'cat_image' => 'cat6.png',
                'cat_description' => 'test description',
                'cat_status' => '1',
            ]
        );

        CategoryMaster::create(
            [
                'cat_name' => 'Rice & Noodles',
                'cat_image' => 'cat4.png',
                'cat_description' => 'test description',
                'cat_status' => '1',
            ]
        );

        CategoryMaster::create(
            [
                'cat_name' => 'Drinks & Sides',
                'cat_image' => 'cat3.png',
                'cat_description' => 'test description',
                'cat_status' => '1',
            ]
        );

        CategoryMaster::create(
            [
                'cat_name' => 'Breakfast Joy',
                'cat_image' => 'cat5.png',
                'cat_description' => 'test description',
                'cat_status' => '1',
            ]
        );

        CategoryMaster::create(
            [
                'cat_name' => 'New Products',
                'cat_image' => 'cat1.png',
                'cat_description' => 'test description',
                'cat_status' => '1',
            ]
        );

        CategoryMaster::create(
            [
                'cat_name' => 'Extras',
                'cat_image' => 'cat2.png',
                'cat_description' => 'test description',
                'cat_status' => '1',
            ]
        );

        CategoryMaster::create(
            [
                'cat_name' => 'Deals',
                'cat_image' => 'cat6.png',
                'cat_description' => 'test description',
                'cat_status' => '1',
            ]
        );
    }
}
