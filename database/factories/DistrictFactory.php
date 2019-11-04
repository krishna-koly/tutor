<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\District;
use Faker\Generator as Faker;

$factory->define(District::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->name,
        'updated_at'=> '2017-04-18 19:54:18',
        'created_at'=> '2017-04-18 19:54:18',
    ];
});
