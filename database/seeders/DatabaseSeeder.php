<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Basket;
use App\Models\Category;
use App\Models\Product;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::insert([
            'name' => 'admin',
            'number' => '+79049339896',
            'isAdmin' => 1,
            'role'=> 'admin',
            'password' => Hash::make('admin11'),
        ]);
        User::insert([
            'name' => 'Алина',
            'number' => '+79514427884',
            'isAdmin' => 0,
            'role'=>'manager',
            'password' => Hash::make('anila16'),
        ]);
        User::insert([
            'name' => 'Наташа',
            'number' => '+79514423684',
            'isAdmin' => 0,
            'password' => Hash::make('olivka2021ooo'),
        ]);
     Category::insert([
        'category_name' => 'Цветы'
     ]);
     Category::insert([
        'category_name' => 'Дополнительно'
     ]);
        Product::insert([
            'product_name' => 'Унаги',
            'category_id' => '1',
            'product_photo' => 'MhdPisVXaA4k1PlOiLF7wFZOHwOTFnW0ITmgV4Dq.png',
            'product_price' => '250',
            'product_count' => '5',
            'product_description' => 'угорь, рис для суси, нори, соус "унаги", кунжут',
        ]);
        Product::insert([
            'product_name' => 'Сякэ',
            'category_id' => '1',
            'product_photo' => 'OUNNp8bvkN8dFWp46ElDLgJ93vNnl3tQ0ydmtRQi.png',
            'product_price' => '200',
            'product_count' => '5',
            'product_description' => 'лосось, рис для суси, васаби',
        ]);
        Product::insert([
            'product_name' => 'Филадельфия',
            'category_id' => '1',
            'product_photo' => 'pcdwh2UlMNu9bxAzyfqQS0QSDozNxbzn3LNbjjle.png',
            'product_price' => '156',
            'product_count' => '5',
            'product_description' => 'копчёный лосось, соус "филадельфия", рис для суси, огурец, васаби',
        ]);
        Product::insert([
            'product_name' => 'Магуро',
            'category_id' => '1',
            'product_photo' => 'oa5Z4UHmFWzz6ZbnaEL38gqf9fdnCJ9MtTXRCUSt.png',
            'product_price' => '300',
            'product_count' => '6',
            'product_description' => 'тунец, рис для суси, васаби',
        ]);
        Product::insert([
            'product_name' => 'Хотатэ',
            'category_id' => '1',
            'product_photo' => 'uVGaEipmxHNJ55WJ8NFguyIMia8h2Ams15gSoYMX.png',
            'product_price' => '250',
            'product_count' => '5',
            'product_description' => 'морской гребешок, рис для суси, васаби',
        ]);
        Product::insert([
            'product_name' => 'Унаги',
            'category_id' => '1',
            'product_photo' => 'aEz3sLViawPsBMtHx2Enu07wvskhDGrSQUvBFifl.png',
            'product_price' => '250',
            'product_count' => '5',
            'product_description' => 'угорь, рис для суси, нори, соус "унаги", кунжут',
        ]);
        Product::insert([
            'product_name' => 'Сякэ',
            'category_id' => '1',
            'product_photo' => 'W8KtqFzVx9xma7toGZ1Fqf9BzyY1atimCkzMGwSX.png',
            'product_price' => '200',
            'product_count' => '5',
            'product_description' => 'лосось, рис для суси, васаби',
        ]);
        Product::insert([
            'product_name' => 'Филадельфия',
            'category_id' => '1',
            'product_photo' => 'oa5Z4UHmFWzz6ZbnaEL38gqf9fdnCJ9MtTXRCUSt.png',
            'product_price' => '156',
            'product_count' => '5',
            'product_description' => 'копчёный лосось, соус "филадельфия", рис для суси, огурец, васаби',
        ]);
        Product::insert([
            'product_name' => 'Магуро',
            'category_id' => '1',
            'product_photo' => 'oa5Z4UHmFWzz6ZbnaEL38gqf9fdnCJ9MtTXRCUSt.png',
            'product_price' => '300',
            'product_count' => '6',
            'product_description' => 'тунец, рис для суси, васаби',
        ]);
        Product::insert([
            'product_name' => 'Хотатэ',
            'category_id' => '1',
            'product_photo' => 'W8KtqFzVx9xma7toGZ1Fqf9BzyY1atimCkzMGwSX.png',
            'product_price' => '250',
            'product_count' => '5',
            'product_description' => 'морской гребешок, рис для суси, васаби',
        ]);
        Product::insert([
            'product_name' => 'Унаги',
            'category_id' => '1',
            'product_photo' => 'KFdjQ6tyZDcEX0SqOEqTPuxXFYkiwtl77TpXA941.png',
            'product_price' => '250',
            'product_count' => '5',
            'product_description' => 'угорь, рис для суси, нори, соус "унаги", кунжут',
        ]);
        Product::insert([
            'product_name' => 'Сякэ',
            'category_id' => '1',
            'product_photo' => 'oa5Z4UHmFWzz6ZbnaEL38gqf9fdnCJ9MtTXRCUSt.png',
            'product_price' => '200',
            'product_count' => '5',
            'product_description' => 'лосось, рис для суси, васаби',
        ]);
        Product::insert([
            'product_name' => 'Филадельфия',
            'category_id' => '2',
            'product_photo' => 'OUNNp8bvkN8dFWp46ElDLgJ93vNnl3tQ0ydmtRQi.png',
            'product_price' => '156',
            'product_count' => '5',
            'product_description' => 'копчёный лосось, соус "филадельфия", рис для суси, огурец, васаби',
        ]);
        Product::insert([
            'product_name' => 'Вакамэ сарада',
            'category_id' => '2',
            'product_photo' => 'KFdjQ6tyZDcEX0SqOEqTPuxXFYkiwtl77TpXA941.png',
            'product_price' => '248',
            'product_count' => '6',
            'product_description' => 'маринованные водоросли, рис для суси, нори',
        ]);
        Product::insert([
            'product_name' => 'Спайси унаги',
            'category_id' => '2',
            'product_photo' => 'mL7TEPhpIYbGnRsAHvXyCZAgwKJ6wAsYqJQtLibs.png',
            'product_price' => '186',
            'product_count' => '5',
            'product_description' => 'угорь, соус "Спайси", рис для суси, нори, васаби',
        ]);
     Status::insert([
        'status_name' => 'Новый'
     ]);
     Status::insert([
        'status_name' => 'Подтверждён'
     ]);
     Status::insert([
        'status_name' => 'Отменён'
     ]);

    }

}
