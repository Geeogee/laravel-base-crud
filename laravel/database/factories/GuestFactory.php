<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guest;
use Faker\Generator as Faker;

$factory->define(Guest::class, function (Faker $faker) {

    $gender = $faker -> randomElement(['male', 'female']);
    
    return [

        'name' => $faker -> firstName($gender),
        'lastname' => $faker -> lastName,
        'date_of_birth' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'document_type' => $faker -> word,
        'document_number' => $faker -> randomNumber($nbDigits = 8, $strict = false),
        'phone_number' => $faker -> phoneNumber,
        'address' => $faker -> address
    ];
});
