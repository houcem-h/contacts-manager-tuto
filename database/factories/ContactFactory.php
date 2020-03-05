<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;
use App\User;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'user_id' => User::get('id')->random(),
        'name' => $faker->name,
        'email' => $faker->email,
        'birthday' => $faker->date('Y-m-d','now'),
        'company' => $faker->company,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
