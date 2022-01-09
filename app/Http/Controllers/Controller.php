<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews(): array
    {
        $faker = Factory::create();
        $news = [];

        for ( $i = 0 ; $i < 10 ; $i ++) {
            $news[] =  [
                'id' => $i,
                'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'date' => $faker->dayOfWeek($max = 'now'),
                'description' => $faker->text(150),
                ];
        }

        return $news;
    }

    public function getCategory(): array
    {
        $faker = Factory::create();
        $category = [];

        for ( $i = 0 ; $i < 12 ; $i ++) {
            $category[] =  [
                'id' => $i,
                'category' => $faker->word,
            ];
        }

        return $category;
    }

    public function getArticle(): array
    {
          $faker = Factory::create();
          return $article = [
                 'id' => $faker->randomDigit(),
                 'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                 'date' => $faker->dayOfWeek($max = 'now'),
                 'description' => $faker->text(200),
          ];
    }
}
