<?php
namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;



class TvMazeAPI
{

    public static function fetch($showNumber)
    {

        $showsData = Http::get("https://api.tvmaze.com/shows/$showNumber/episodes")->json();


        // return $showsData;

        $showsCollection = collect($showsData);

        // return $showsCollection;

        return $showsCollection->map(function ($show) {
            return new Episode($show['name'], $show['image']['medium'], $show['season'], $show['number'], $show['summary']);
        });
    }
}