<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('orders')->insert([
[
    'subtotal' => Str::random(10),
    'tax' => Str::random(10),
    'total' => Str::random(10),
    'discount' => Str::random(10),
    'quantity' => Str::random(10),
    'user_id' => 1,
    'product_id' => 2,
],
[
    'subtotal' => Str::random(10),
    'tax' => Str::random(10),
    'total' => Str::random(10),
    'discount' => Str::random(10),
    'quantity' => Str::random(10),
    'user_id' => 1,
    'product_id' => 2,
],
[
    'subtotal' => Str::random(10),
    'tax' => Str::random(10),
    'total' => Str::random(10),
    'discount' => Str::random(10),
    'quantity' => Str::random(10),
    'user_id' => 1,
    'product_id' => 2,
],
           


        ]);

    }
}
