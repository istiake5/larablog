<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $name = $faker->word;
    $slug = Str::slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
        'image' => $faker->image('storage/app/public/category', 1600, 479),
        'image' => $faker->image('storage/app/public/category', 500, 333),
    ];
});
