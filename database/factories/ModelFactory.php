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

$factory->define(App\Announcements::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->paragraph,
        'announcement' => $faker->paragraph,
        'link_txt' => $faker->paragraph,
        'link' => $faker->paragraph,
        'email_link_txt' => $faker->email,
        'email_link' => $faker->name,
        'start_date' => $faker->date,
        'end_date' => $faker->date,
    ];
});
