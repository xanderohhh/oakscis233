<?php

namespace App\Models;

class Episode {
    public $name;
    public $imageURL;
    public $season;
    public $episode;
    public $summary;

    public function __construct($name, $imageURL, $season, $episode, $summary){
        $this->name = $name;
        $this->imageURL = $imageURL;
        $this->season = $season;
        $this->episode = $episode;
        $this->summary = $summary;
    }
};