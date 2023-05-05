<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategoryCoffee;
use App\Models\Coffee;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CategoryCoffee::create([
            'name' => 'FREEZY',
        ]);
        CategoryCoffee::create([
            'name' => 'Coffee',
        ]);
        CategoryCoffee::create([
            'name' => 'Non-Coffee',
        ]);
        CategoryCoffee::create([
            'name' => 'Makanan',
        ]);
        Coffee::create([
            'name' => 'FREEZY Latte',
            'price' => 25000,
            'category_coffee_id' => 1
        ]);
        Coffee::create([
            'name' => 'FREEZY Mocha Latte',
            'price' => 30000,
            'category_coffee_id' => 1
        ]);
        Coffee::create([
            'name' => 'FREEZY Dutch Chocolate',
            'price' => 28000,
            'category_coffee_id' => 1
        ]);

        
        Coffee::create([
            'name' => 'Coffee Toasted Coconut Latte',
            'price' => 26000,
            'category_coffee_id' => 2
        ]);
        Coffee::create([
            'name' => 'Kopi Kenangan Mantan',
            'price' => 19000,
            'category_coffee_id' => 2
        ]);
        Coffee::create([
            'name' => 'Americano',
            'price' => 15000,
            'category_coffee_id' => 2
        ]);
        Coffee::create([
            'name' => 'Avocado Coffee',
            'price' => 28000,
            'category_coffee_id' => 2
        ]);

        Coffee::create([
            'name' => 'Earl Grey Milk Tea',
            'price' => 19000,
            'category_coffee_id' => 3
        ]);
        Coffee::create([
            'name' => 'Hazelnut Choco Milk Tea',
            'price' => 22000,
            'category_coffee_id' => 3
        ]);
        Coffee::create([
            'name' => 'Kenangan Milk Tea',
            'price' => 19000,
            'category_coffee_id' => 3
        ]);
        Coffee::create([
            'name' => 'Thai Tea',
            'price' => 22000,
            'category_coffee_id' => 3
        ]);

        Coffee::create([
            'name' => 'Berry Funfetti Cookies',
            'price' => 19000,
            'category_coffee_id' => 4
        ]);
        Coffee::create([
            'name' => 'Biscoff Crunch Cookies',
            'price' => 25000,
            'category_coffee_id' => 4
        ]);
        Coffee::create([
            'name' => 'Friend Chip Cookies',
            'price' => 22000,
            'category_coffee_id' => 4
        ]);
        Coffee::create([
            'name' => 'Mr. Hazelnut Cookies',
            'price' => 29000,
            'category_coffee_id' => 4
        ]);

        User::create([
            'name' => 'Nangskii',
            'level' => 'Gold Level',
            'stars' => 200,
            'colorcode' => '#C6A961'
        ]);

        User::create([
            'name' => 'Capyy',
            'level' => 'Green Level',
            'stars' => 1,
            'colorcode' => '#006F42'
        ]);
        
        Transaction::create([
           'user_id'=> 1,
           'coffee_id'=>4,
           'date' => '2023-03-19 12:59:01'
        ]);
        Transaction::create([
            'user_id'=> 1,
            'coffee_id'=>3,
            'date' => '2023-03-20 11:49:49'
        ]);
        Transaction::create([
           'user_id'=> 1,
           'coffee_id'=>2,
           'date' => '2023-03-21 13:20:15'
        ]);

        Transaction::create([
           'user_id'=> 2,
           'coffee_id'=>9,
           'date' => '2023-03-18 17:34:02'
        ]);
        Transaction::create([
            'user_id'=> 2,
            'coffee_id'=>7,
            'date' => '2023-03-19 17:45:23'
         ]);
         Transaction::create([
            'user_id'=> 2,
            'coffee_id'=>6,
            'date' => '2023-03-21 18:21:21'
         ]);
    }
}
