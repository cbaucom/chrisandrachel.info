<?php

namespace App\Http\Requests;
use App\Rsvp;
use App\Http\Requests\Request;

class RsvpRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // $user    = app( 'auth' )->user();
        // $rsvp = Rsvp::findOrFail( $this->rsvps );

        // return $rsvp->user_id === $user->id;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|unique:rsvps,email'
            // 'vote' => 'required|integer'
        ];
    }

    // override this to redirect back
    public function forbiddenResponse()
    {
        return redirect()->back()->withInput()->withErrors('forbidden');
    }
}
