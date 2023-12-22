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
        'surname' => 'admin',
        'login' => 'admin',
        'email' => 'admin',
         'isAdmin' => 1,
         'password' => Hash::make('admin11'),
     ]);
     User::insert([
        'name' => 'Абоба',
        'surname' => 'Абоба',
        'login' => 'aboba',
        'email' => 'aboba@example.com',
         'isAdmin' => 0,
         'password' => Hash::make('aboba11'),
     ]);
     Category::insert([
        'category_name' => 'Цветы'
     ]);
     Category::insert([
        'category_name' => 'Дополнительно'
     ]);
     Product::insert([
         'product_name' => 'Спортики',
         'category_id' => '1',
         'product_photo' => 'Mcng66Tq6mu5gFfcTOFwX7f5pItglBnIHPITB80F.jpg',
         'product_country' => 'Украина',
         'product_price' => '248500',
         'product_count' => '2',
         'product_description' => 'Описание крутых спортиков',
     ]);
     Product::insert([
         'product_name' => 'Спортики',
         'category_id' => '1',
         'product_photo' => 'Mcng66Tq6mu5gFfcTOFwX7f5pItglBnIHPITB80F.jpg',
         'product_country' => 'Украина, Винница',
         'product_price' => '248500',
         'product_count' => '2',
         'product_description' => 'Описание крутых спортиков',
     ]);
     Product::insert([
         'product_name' => 'Спортики',
         'category_id' => '1',
         'product_photo' => 'Mcng66Tq6mu5gFfcTOFwX7f5pItglBnIHPITB80F.jpg',
         'product_country' => 'Украина, Винница',
         'product_price' => '248500',
         'product_count' => '2',
         'product_description' => 'Описание крутых спортиков',
     ]);
     Product::insert([
         'product_name' => 'Виницианский маньяк',
         'category_id' => '1',
         'product_photo' => 'BV4xFBTlCpAKjIGtJ76iFgt7dPO6MkjYlR4U0xZb.jpg',
         'product_country' => 'Украина, Винница',
         'product_price' => '14135',
         'product_count' => '1',
         'product_description' => 'Бешенный мужик',
     ]);
     Product::insert([
         'product_name' => 'Крутой мужик',
         'category_id' => '1',
         'product_photo' => 'mYvBYT4Wd0W8gNF4UUYwaMBFcQAgs63Wna2l4afS.jpg',
         'product_country' => 'Америка',
         'product_price' => '293756',
         'product_count' => '13434',
         'product_description' => 'Может печатать гачи песни',
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
