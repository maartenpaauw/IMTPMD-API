<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(\IMTPMD\Models\User::class, function (\Faker\Generator $faker) {
   return [
       'number' => 's' . $faker->unique()->numberBetween(1000000, 9999999)
   ];
});

$factory->define(\IMTPMD\Models\Meeting::class, function(\Faker\Generator $faker) {

    $starting_at = $faker->dateTimeBetween(\Carbon\Carbon::now(), \Carbon\Carbon::now()->addWeek());
    $ending_at   = $faker->dateTimeBetween($starting_at, \Carbon\Carbon::instance($starting_at)->addHours(3));

    return [
        'user_id'     => \IMTPMD\Models\User::inRandomOrder()->first()->id,
        'name'        => $faker->unique()->colorName,
        'description' => $faker->paragraph,
        'starting_at' => $starting_at,
        'ending_at'   => $ending_at
    ];
});

$factory->define(\IMTPMD\Models\Feedback::class, function (\Faker\Generator $faker) {
    return [
        'emotion_id'  => \IMTPMD\Models\Emotion::inRandomOrder()->first()->id,
        'meeting_id'  => \IMTPMD\Models\Meeting::inRandomOrder()->first()->id,
        'user_id'     => \IMTPMD\Models\User::inRandomOrder()->first()->id,
        'description' => $faker->paragraph
    ];
});