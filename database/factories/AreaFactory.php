<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Area;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Area::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->name,
        'district_id' => $faker->unique()->randomnumber,
        'updated_at'=> '2017-04-18 19:54:18',
        'created_at'=> '2017-04-18 19:54:18',
    ];
});
