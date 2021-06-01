<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
           
            [
                'name'=>'Chicken Fried Rice',
                'price'=> '7RM',
                'description'=> 'Served with rice, chicken, egg, vegetable and salad',
                'gallery'=> 'https://annamodisha.com/wp-content/uploads/2020/09/Chicken-Fried-Rice-square-FS-.jpg'
            ],
            [
                'name'=>'Creamy Pasta',
                'price'=> '15RM',
                'description'=> 'Pasta Served with cheese, chicken, spinach and tomato pasta sause',
                'gallery'=> 'https://annamodisha.com/wp-content/uploads/2020/09/Creamy-Spinach-Tomato-Pasta-bowl.jpg'
            
            ],
            [
                'name'=>'Steamed Fish',
                'price'=> '12RM',
                'description'=> 'Served with kattle fish, lemon juice, butter sause and salad',
                'gallery'=> 'https://annamodisha.com/wp-content/uploads/2021/04/Steamed-Fish.jpg'
            
            ],
            [
                'name'=>'Strawberry Milkshake',
                'price'=> '14RM',
                'description'=> 'Served with smashed strawberries, milk, creamer and ice',
                'gallery'=> 'https://annamodisha.com/wp-content/uploads/2021/05/Strawberry-Milkshake.jpg'
            
            ],
            [
                'name'=>'Club Sandwitch',
                'price'=> '12RM',
                'description'=> 'Served with cheese, chicken, tomato and cucumber, cabbage',
                'gallery'=> 'https://annamodisha.com/wp-content/uploads/2020/09/RFO-1400x919-ChickenClubSandwich-0ee77c05-5a77-49ac-a3bd-4d45e3b4dca7-0-1400x919-1.jpg'
            
            ],
            [
                'name'=>'Shawarma',
                'price'=> '12RM',
                'description'=> 'Served with fried potato, chicken, onion cucumber and cabbage',
                'gallery'=> 'https://annamodisha.com/wp-content/uploads/2020/09/paneer-kathi-rolls-1-1.jpg'
            
            ],



        ]);
    }
}
