<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\PitstopSaranaDetail::class, function (Faker $faker) {
    return [
        'pitstop_sarana_id' => $faker->randomNumber(),
        'kode_unit' => function () {
            return factory(App\Models\Unit::class)->create()->kode_unit;
        },
        'hm_km' => $faker->word,
        'qty_solar' => $faker->randomNumber(),
        'jatah_solar' => $faker->word,
        'jam' => $faker->time(),
        'nama_user' => $faker->word,
        'flow_meter_awal' => $faker->randomNumber(),
        'flow_meter_akhir' => $faker->randomNumber(),
        'qty_flow_meter' => $faker->randomNumber(),
        'keterangan' => $faker->text,
        'created_by' => $faker->randomNumber(),
    ];
});
