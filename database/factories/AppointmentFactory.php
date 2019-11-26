<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Appointment;
use Faker\Generator as Faker;

$factory->define(Appointment::class, function (Faker $faker) {
    return [
    		'scheduled' => $faker->dateTime(),
    		'patientID' => $faker->randomDigit(),
    		'doctorID' => $faker->randomDigit()
    	];
});
