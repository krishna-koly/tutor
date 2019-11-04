<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tutor;
use Faker\Generator as Faker;

$factory->define(Tutor::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->name,
        'phone' => '01758421525',
        'email' => $faker->unique()->safeEmail,
        'contact_address' => $faker->address,
        'image' => 'jpg',
        'gender' => 'male',
        'university_id' => rand(1,5),
        'degree_id' => rand(1,5),
        'subject_id' => rand(1,5),
        'updated_at'=> '2017-04-18 19:54:18',
        'created_at'=> '2017-04-18 19:54:18',
    ];
});
