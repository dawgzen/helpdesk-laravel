<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = [];

    public function submitting_user()
    {
        return $this->belongsTo('App\User', "user_id");
    }
    public function assigned_users(){
        return $this->belongsToMany("App\User");
    }
    public function status()
    {
        return $this->belongsTo('App\Status')->withDefault();
    }
    public function comments(){
        return $this->hasMany("App\Comment");
    }
}