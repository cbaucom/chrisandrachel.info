<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $table = "rsvps";
    
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'first_name2', 
        'last_name2', 
        'email2', 
        'first_name3', 
        'last_name3', 
        'email3', 
        'first_name4', 
        'last_name4', 
        'email4', 
        'first_name5', 
        'last_name5', 
        'email5', 
        'message', 
        'vote',
    ];

    // An RSVP is owned by a user.
    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
}
