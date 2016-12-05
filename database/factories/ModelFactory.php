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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class,function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence(8),
        'content' => $faker-> paragraph(4),
        'user_id' => rand(1,20),
    ];
});
$factory->define(App\Models\Event::class,function (Faker\Generator $faker) {

    return [
        'name' => $faker->sentence(8),
        'description' => $faker->paragraphs(4),
        'start' => rand(1,20),
        'end' => rand(1,20),
        'lieu' => $faker-> words(1),
        'tarif' => rand(1,50),
        'user_id' => rand(1,20),
    ];
});
