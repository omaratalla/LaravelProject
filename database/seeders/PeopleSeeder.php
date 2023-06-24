<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('people')->insert([
[
    'address' => Str::random(10),
    'email' => Str::random(10),
    'address' => Str::random(10),
    'password' => Str::random(10),
    'name' => Str::random(10),
    'city' => Str::random(10),
    'longitude' => Str::random(10),
    'state' => Str::random(10),
    'source' => Str::random(10),
    'birthdate' => Str::random(10),
    'zip' => Str::random(10),
    'latitude' => Str::random(10),
],
[
    'address' => Str::random(10),
    'email' => Str::random(10),
    'address' => Str::random(10),
    'password' => Str::random(10),
    'name' => Str::random(10),
    'city' => Str::random(10),
    'longitude' => Str::random(10),
    'state' => Str::random(10),
    'source' => Str::random(10),
    'birthdate' => Str::random(10),
    'zip' => Str::random(10),
    'latitude' => Str::random(10),
],
[
    'address' => Str::random(10),
    'email' => Str::random(10),
    'address' => Str::random(10),
    'password' => Str::random(10),
    'name' => Str::random(10),
    'city' => Str::random(10),
    'longitude' => Str::random(10),
    'state' => Str::random(10),
    'source' => Str::random(10),
    'birthdate' => Str::random(10),
    'zip' => Str::random(10),
    'latitude' => Str::random(10),
],


        ]);

    }
}
