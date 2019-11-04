<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subject;
use Faker\Generator as Faker;

$factory->define(Subject::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->name,
        'studentclass_id' => rand(1,10),
        'updated_at'=> '2017-04-18 19:54:18',
        'created_at'=> '2017-04-18 19:54:18',
    ];
});
