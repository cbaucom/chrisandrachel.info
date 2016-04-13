<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'restrictions', 
        'first_name2', 
        'last_name2', 
        'email2', 
        'restrictions2', 
        'first_name3', 
        'last_name3', 
        'email3', 
        'restrictions3', 
        'first_name4', 
        'last_name4', 
        'email4', 
        'restrictions4', 
        'first_name5', 
        'last_name5', 
        'email5', 
        'restrictions5', 
        'vote',
        'kids'
    ];
}
