<?php

use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    $type = $faker->boolean ? 'goo' : 'baah';

    return [
        'user_id' => function() {
            return App\User::firstOrFail();
        },
        'path' => $faker->url,
        'type' => $type,
    ];
});
