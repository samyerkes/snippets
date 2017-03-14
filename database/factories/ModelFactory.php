<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'api_token' => str_random(60),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Snippet::class, function (Faker\Generator $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'title' => $faker->sentence,
        'body' => 'I like $1. I $2 it all the time. $1 is good for the soul.'
    ];
});

$factory->define(App\Models\Output::class, function (Faker\Generator $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'snippet_id' => App\Models\Snippet::all()->random()->id,
        'body' => $faker->sentence
    ];
});
