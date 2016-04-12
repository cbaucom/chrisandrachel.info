<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $fillable = [
    	'first_name1', 
    	'last_name1', 
    	'email', 
    	'restrictions1', 
    	'first_name2', 
    	'last_name2', 
    	'restrictions2', 
    	'vote',
    	'kids'
    ];
}
