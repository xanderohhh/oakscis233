<?php

namespace App\Models;
use Illuminate\Support\Facades\Route;
use App\Models\Episode;


Route::get('/load-episodes', function(){
    $showNumber = intval(request()->query('showNumber'));
    $showNumber = $showNumber < 1 ? 1 : $showNumber;
    $episodes = TvMazeAPI::fetch($showNumber);
    return view('episodes/index', ['episodes' => $episodes]);
});

Route::get('/view-episodes', function(){
    $showNumber = intval(request()->query('showNumber'));
    $showNumber = $showNumber < 1 ? 1 : $showNumber;
    $episodes = Episode::where('show_number', $showNumber)->get();
    return view('episodes/index', ['episodes' => $episodes]);
});



Route::get('/', function () {
    return view('welcome');
});
