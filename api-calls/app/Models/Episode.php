<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model{


    protected $fillable = ['name', 'image', 'season', 'episode', 'summary', 'show_number'];

};
