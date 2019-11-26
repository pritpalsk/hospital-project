<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
    	'fname' => $faker->firstName(),
		'lname' => $faker->lastName(),
		'dob' => $faker->date(),
		'ssn' => $faker->numberBetween(100000000, 9999999999),
		'gender' => $faker->randomElement(['M', 'F']),
		'phonenum' => $faker->phoneNumber(),
		'address' => $faker->address(),
		'deptID' => $faker->randomDigit()
    ];
});
