<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
[
    'reviewer' => Str::random(10),
    'rating' => Str::random(10),
    'body' => Str::random(10),
    'product_id' => 1,

],
[
    'reviewer' => Str::random(10),
    'rating' => Str::random(10),
    'body' => Str::random(10),
    'product_id' => 1,

],
[
    'reviewer' => Str::random(10),
    'rating' => Str::random(10),
    'body' => Str::random(10),
    'product_id' => 2,

],

        ]);

    }
}
