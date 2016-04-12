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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Rsvp::class, function (Faker\Generator $faker) {
    return [
        'first_name1' => $faker->firstName,
        'last_name1' => $faker->lastName,
        'email' => $faker->email,
        'restrictions1' => $faker->text,
        'first_name2' => $faker->firstName,
        'last_name2' => $faker->lastName,
        'restrictions2' => $faker->text,
        'kids' => $faker->numberBetween(0, 3),
        'vote' => $faker->numberBetween(0, 1)
    ];
});