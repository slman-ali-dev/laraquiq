<?php

namespace App\Models;

use App\Helpers\bbbHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Room extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($query){
            $query->moderator_pw = Str::random(12);
            $query->attendee_pw = Str::random(12);
            $query->room_id = substr(auth()->user()->email,0,2) . "-" . Str::random(4)."-".Str::random(4);
            $query->user_id = auth()->id;
            $query->bbb_id = (string)Str::orderedUuid();
        });
    }


    public function sessions()
    {
        return $this->hasMany('App\Models\Session', 'room_id', 'id');
    }
    
}
