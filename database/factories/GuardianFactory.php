<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guardian;
use Faker\Generator as Faker;

$factory->define(Guardian::class, function (Faker $faker) {
    return [
        //


        'name' => $faker->name,
        'phone' => '01758421525',
        'email' => $faker->unique()->safeEmail,
        'Contact_address' => $faker->address,
        'image' => 'jpg',
        'gender' => 'male',
        'updated_at'=> '2017-04-18 19:54:18',
        'created_at'=> '2017-04-18 19:54:18',
    ];
});
