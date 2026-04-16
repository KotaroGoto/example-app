<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 初期値のコードは使用しないので削除して、下記の1行にする
        $this->call([
            UsersSeeder::class,
            TweetsSeeder::class,
        ]);
    }
}
