<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use \App\Models\Comic;


$factory->define(\App\Models\Comic::class, function (Faker $faker) {
    return [
        'comic_name' => $faker->name,
        'writer_name' => $faker->name,
        'publisher' => $faker->name,
        'publication_magazine' => $faker->name,
        'publish_number' => $faker->numberBetween($min=1, $max=10),
        'publish_status' => $faker->name,
        'duration' => $faker->name,
        'amazon_url' => $faker->name,
    ];
});
