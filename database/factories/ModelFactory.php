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
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Interview::class, function (Faker\Generator $faker) {

    return [
        'name'       => $faker->name,
        'founded_in' => $faker->year,
        'based_in'   => $faker->city,
        'founders'   => $faker->numberBetween(1, 10),
        'employees'  => $faker->numberBetween(10, 100),
        'body'       => $faker->paragraph(5),
        'avatar'     => 'avatar.jpg',
        'published'  => false,
    ];

});

$factory->state(App\Models\Interview::class, 'published', function (Faker\Generator $faker) {

    return [
        'published' => true,
    ];

});
