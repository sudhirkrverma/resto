<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\restaurants;
use Faker\Generator as Faker;

$factory->define(restaurants::class, function (Faker $faker) {
    return [
        //here we defines tha faker function
        'name'=>$faker->name,
        'email'=>$faker->email,
        'address'=>$faker->address,


    ];
});
