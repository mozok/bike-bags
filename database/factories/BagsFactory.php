<?php

use Faker\Generator as Faker;

$factory->define(App\Bag::class, function (Faker $faker) {
    $images = array();
    for ($i=0;$i<3;$i++) {
        $images [] = $faker -> imageUrl(640, 480);
    }
    return [
        'title' => $faker -> text(50),
        'body' => $faker -> text(200),
        'images' => json_encode($images) 
    ];
});
