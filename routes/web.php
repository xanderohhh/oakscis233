<?php
// namespace App\Models;

use Illuminate\Support\Facades\Route;
use App\Models\TvMazeAPI;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/episodes', function () {
    $showNumber = intval(request()->query('showNumber'));
    $showNumber = $showNumber < 1 ? 1: $showNumber;
    $episodes = TvMazeAPI::fetch($showNumber);
    return view('episodes/index', ['episodes' => $episodes]);
});

Route::get('/', function () {
    return view('welcome');
});
