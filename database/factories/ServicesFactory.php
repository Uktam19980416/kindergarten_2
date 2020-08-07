<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Services;
use Faker\Generator as Faker;

$factory->define(Services::class, function (Faker $faker) {

    return [
        'about_service' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
