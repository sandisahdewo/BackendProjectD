<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Unit::class, function (Faker $faker) {
    return [
        'kode_unit' => $faker->word,
        'no_polisi' => $faker->word,
        'tipe_unit' => $faker->word,
        'jatah_solar' => $faker->word,
    ];
});
