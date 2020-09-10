<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'student_name' => $faker->name,
        'father_name' => $faker->name,
        'age' => $faker->numberBetween($min = 9, $max = 87),
        'mobile_no' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'gender' => $faker->randomElement($array = array ('Male','Female')),
        'address' => $faker->address,
        'course_name' => $faker->randomElement($array = array ('Web','Adobe','Logo')),
        'course_duration' => $faker->dateTime($max = 'now', $timezone = null),
        'joining_date' => $faker->dateTime($max = 'now', $timezone = null),
        'ending_date' => $faker->dateTime($max = 'now', $timezone = null),
        'course_fee' => $faker->numberBetween($min = 1000, $max = 9000),
        'discount_fee' => $faker->numberBetween($min = 1000, $max = 9000),
        'paid_fee' => $faker->numberBetween($min = 1000, $max = 9000),
        'remaining_fee' => $faker->numberBetween($min = 1000, $max = 9000),
        'image' => $faker->name,

    ];
});
