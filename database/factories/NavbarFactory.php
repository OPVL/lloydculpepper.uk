<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Util\Navbar\Link;
use App\Util\Navbar\Navbar;
use Faker\Generator as Faker;

$factory->define(Navbar::class, function (Faker $faker): array {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
    ];
});

$factory->define(Link::class, function (Faker $faker) {
    return [
        'label' => $faker->lastName,
        'href' => $faker->url,
    ];
});

$factory->state(Navbar::class, 'with-links', function (Faker $faker): array {
    return [];
});

$factory->afterCreatingState(Navbar::class, 'with-links', function (Navbar $navbar) {
    $navbar->links()->saveMany(factory(Link::class, 3)->make());
});