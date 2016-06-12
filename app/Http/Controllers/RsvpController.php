<?php

namespace App\Http\Controllers;
use App\User;
use App\Rsvp;
use Auth;
use DB;
use Illuminate\Http\Request;
use Mail;
use App\Http\Controllers\Controller;

use App\Http\Requests\RsvpRequest;

class RsvpController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('auth', ['except' => 'create']);
    }

    protected $fields = [
    	'vote' => 0,
    ];

    public function index()
    {
        $user = Auth::user();
        if ($user->rsvps()) {
            return view('rsvp');
        } else {
            return view('rsvp');            
        }
    }

    // Show the RSVP form
    public function create()
    {
        return view('rsvp.create');
    }

    public function store(RsvpRequest $request)
    {   
        $rsvp = new Rsvp($request->all());
        Rsvp::create($request->all());

        $data = array(
             'firstname' => $rsvp->first_name,
             'lastname' => $rsvp->last_name,
             'email' => $rsvp->email,
             'firstname2' => $rsvp->first_name2,
             'lastname2' => $rsvp->last_name2,
             'email2' => $rsvp->email2,
             'firstname3' => $rsvp->first_name3,
             'lastname3' => $rsvp->last_name3,
             'email3' => $rsvp->email3,
             'firstname4' => $rsvp->first_name4,
             'lastname4' => $rsvp->last_name4,
             'email4' => $rsvp->email4,
             'firstname5' => $rsvp->first_name5,
             'lastname5' => $rsvp->last_name5,
             'email5' => $rsvp->email5,
             'note' => $rsvp->message,
        );
        if ($rsvp->vote == true) {
            Mail::queue('emails.yes', $data, function ($message)  {

                $message->from('chrisrb83@gmail.com', 'Chris and Rachel');

                $message->to('chrisrb83@gmail.com')->subject('Thank you!');

            });
        } else {
            Mail::queue('emails.no', $data, function ($message) {

                $message->from('chrisrb83@gmail.com', 'Chris and Rachel');

                $message->to('chrisrb83@gmail.com')->subject('Thank you!');

            });
        }


        flash()->success('Success!', 'RSVP successfully created!');       
        return view('welcome')->with('success', 'RSVP successfully created!');
    }

    public function show(Rsvp $rsvp)
    {
        return view('rsvp.list', compact('rsvp'));
    }

    public function edit(RsvpRequest $request, $id)
    {   
        $rsvp = Rsvp::find($id);
        $rsvp = $request->all();
        $rsvp_user_id = $rsvp->user_id;
        $user = Auth::user();

        if ($rsvp_user_id === $user_id) {
            return view('rsvp.edit',  compact('rsvp'));
            // return View::make('rsvp.edit')->with('rsvp', $rsvp);
        } else {
            return redirect('/');
        }
    }

    public function update(RsvpRequest $request, $id)
    {
        $rsvp = Rsvp::findOrFail($id);

        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();

        $rsvp->fill($input)->save();

        Session::flash('flash_message', 'RSVP successfully updated!');

        return redirect('rsvp');
    }

    public function destroy($id)
    {
        Rsvp::findOrFail($id)->delete();

        return redirect('/')->with('flash_message', 'The RSVP has been destroyed');
    }
}
