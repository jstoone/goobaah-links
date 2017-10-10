<?php

use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return App\User::firstOrFail();
        },
        'path' => $faker->url
    ];
});
