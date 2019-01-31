<?php

use Faker\Generator as Faker;

$factory->define(App\Property::class, function (Faker $faker) {

    $type = ['Apartment', 
             'Flat', 
             'Condominium', 
             'Serviced Residence', 
             'Bungalow', 
             'Semi-detached House', 
             'Cluster House', 
             '1-sty Terrace/Link House', 
             '1.5-sty Terrace/Link House', 
             '2-sty Terrace/Link House'];
    
    return [
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->state,
        'postcode' => $faker->postcode,
        'lat' => $faker->latitude,
        'long' => $faker->longitude,
        'type' => $type[rand(0,9)],
        'price' => rand(100000, 10000000),
        'size' => rand(800, 100000),
        'rooms' => rand(3,15)
    ];
});
