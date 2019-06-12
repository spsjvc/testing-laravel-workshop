<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Order;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'product_name' => 'Test Product Name',
        'product_price' => 400,
        'quantity' => 6,
    ];
});
