<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {
    return [
    		'fname' => $faker->firstName(),
    		'lname' => $faker->lastName(),
    		'ssn' => $faker->numberBetween(100000000, 9999999999),
    		'gender' => $faker->randomElement(['M', 'F']),
    		'dob' => $faker->date(),
    		'startdate' => $faker->date()
    	];
});
