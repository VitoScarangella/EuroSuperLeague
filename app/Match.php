<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';
    protected $guarded = [];

    public function home(){
        return $this->belongsTo(Team::class, 'home_id', 'id');
    }
    public function away(){
        return $this->belongsTo(Team::class, 'away_id', 'id');
    }

}
