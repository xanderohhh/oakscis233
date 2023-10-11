<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use App\Models\Episode;

class TvMazeAPI
{
    public static function fetch($showNumber)
    {
        $episodesData = Http::get("https://api.tvmaze.com/shows/$showNumber/episodes")->json();

        $episodesCollection = collect($episodesData);

        // return $episodesCollection;

        return $episodesCollection->map(function ($show) use ($showNumber) {
            //using firstOrCreate here prevents the same show from being written to the database more than once
            return Episode::firstOrCreate([
                'name' => $show['name'],
                'image' => $show['image']['original'],
                'season' => $show['season'],
                'episode' => $show['number'],
                'summary' => strip_tags($show['summary']),
                'show_number' => $showNumber
            ]);
        });


    }
}