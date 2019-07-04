<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PostModel;
use App\User;
use Faker\Generator as Faker;

/*$factory->define(PostModel::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content'=>$faker->text,
    ];
});*/



$factory->define(App\PostModel::class, function (Faker $faker) {
    return [
       'user_id'=>function(){
            return factory(App\User::class)->create()->id;
        },
      //  'user_id'=>2,
        'title' => $faker->sentence,// password
        'content' =>  $faker->paragraph,];
});
