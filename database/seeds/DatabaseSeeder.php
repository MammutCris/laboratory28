<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(WhatDoTableSeeder::class);
         $this->call(NewsTableSeeder::class);
         $this->call(SliderTableSeeder::class);
         $this->call(IndexVideoTableSeeder::class);
         $this->call(AboutTableSeeder::class);
         $this->call(LectureTableSeeder::class);
    }
}
