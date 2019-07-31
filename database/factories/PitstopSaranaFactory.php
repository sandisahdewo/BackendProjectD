<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\PitstopSarana::class, function (Faker $faker) {
    return [
        'nomor' => $faker->randomNumber(),
        'line' => $faker->word,
        'driver' => $faker->word,
        'fuelman' => function () {
            return factory(App\Models\Petugas::class)->create()->id;
        },
        'tanggal' => $faker->date(),
        'shift' => $faker->word,
        'whs_number' => $faker->word,
        'lokasi' => $faker->word,
        'petugas_pitstop' => $faker->randomNumber(),
        'status' => $faker->word,
        'approved_by' => $faker->randomNumber(),
        'approved_at' => $faker->dateTime(),
        'created_by' => $faker->randomNumber(),
    ];
});
