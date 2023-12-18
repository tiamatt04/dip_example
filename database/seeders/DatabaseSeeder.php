<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
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
     Category::insert([
        'category_name' => 'Цветы'
     ]);
     Category::insert([
        'category_name' => 'Дополнительно'
     ]);
    }
}
