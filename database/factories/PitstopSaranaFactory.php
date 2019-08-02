<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\PitstopSarana::class, function (Faker $faker) {
    $petugas = factory(App\Models\Petugas::class)->create()->id;
    return [
        'nomor' => $faker->randomElement(['68', '86']),
        'line' => $faker->randomElement(['Line 1', 'Line 2']),
        'driver' => $faker->word,
        'fuelman' => $petugas,
        'tanggal' => $faker->date(),
        'shift' => $faker->randomElement(['siang', 'malam']),
        'whs_number' => Str::random(4),
        'lokasi' => Str::random(4),
        'petugas_pitstop' => $petugas,
        'status' => $faker->randomElement(['input', 'finish-input', 'rejected', 'approved']),
        'approved_by' => $faker->randomNumber(),
        'approved_at' => $faker->dateTime(),
        'created_by' => $petugas,
    ];
});
