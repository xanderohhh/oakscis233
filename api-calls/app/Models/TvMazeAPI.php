<?php

namespace App\Models;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use App\Models\Episode;

class TvMazeAPI {
    public static function fetch($showNumber){
        $episodesData = Http::get("https://api.tvmaze.com/shows/$showNumber/episodes")->json();

        $episodesCollection = collect($episodesData);

    // return $episodesCollection;

        return $episodesCollection->map(function($show){
            return new Episode($show['name'], $show['image']['original'], $show['season'], $show['number'], $show['summary']);
        });


    }
}