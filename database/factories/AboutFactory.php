<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {

    return [
        'who_we_are' => $faker->text,
        'what_we_do' => $faker->text,
        'images' => $faker->word,
        'title' => $faker->word,
        'description' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
