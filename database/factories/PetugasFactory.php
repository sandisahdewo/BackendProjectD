<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Petugas;
use Faker\Generator as Faker;

$factory->define(Petugas::class, function (Faker $faker) {
    return [
        'user_id'   => function () {
            return factory(App\User::class)->create()->id;
        },
        'nama'      => $faker->name,
        'email'     => $faker->email,
        'no_hp'     => $faker->phoneNumber,
        'tanggal_lahir' => $faker->date,
        'created_by'=> 1
    ];
});
