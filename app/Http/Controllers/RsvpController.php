<?php

namespace App\Http\Controllers;

use App\Rsvp;
use Illuminate\Http\Request;

use App\Http\Requests\RsvpRequest;

class RsvpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	protected $fields = [
		'vote' => 0,
	];

    public function index()
    {
    	return view('rsvp');
    }

    public function store(RsvpRequest $request)
    {
    	// Persist the data
    	Rsvp::create($request->all());

            // Flash message
            flash()->success('Success!', 'RSVP successfully created!');

    	// Redirect to the 
    	return redirect()->back(); //temp
    }

    public function create()
    {
        flash('Hello MAN', 'You cool, dude!');
    	return view('flyers.create');
    }

    public function show()
    {
        $rsvps = Rsvp::all();
        return view('rsvp.list', compact('rsvps'));
    }
}
