<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupYouthRequest;
use App\Http\Requests\SignupMentorRequest;


use App\Http\Requests;
use App\Candidate;

use Carbon\Carbon;

class CandidatesWebsiteController extends Controller
{

	public function createJongere(SignupYouthRequest $request)
	{
        $date = new Carbon();

        $candidate = new Candidate();

        $candidate->first_name = $request->voornaam;
        $candidate->last_name = $request->achternaam;
        $candidate->telephone_number = $request->telefoonnummer;
        $candidate->date_of_birth = $request->geboortedatum;
        $candidate->email_address = $request->emailadres;
        $candidate->municipality = $request->municipality;
        $candidate->message = $request->bericht;
        $candidate->date_applied = $date;
        $candidate->choices = "jongere";

        $candidate->save();

        $request->session()->flash('succeed', 'Uw aanvraag is verzonden!');

        return redirect()->back();

	}

	public function createMentoren(SignupMentorRequest $request)
	{
        $date = new Carbon();

        $candidate = new Candidate();

        $candidate->first_name = $request->voornaam;
        $candidate->last_name = $request->achternaam;
        $candidate->telephone_number = $request->telefoonnummer;
        $candidate->date_of_birth = $request->geboortedatum;
        $candidate->email_address = $request->emailadres;
        $candidate->municipality = $request->municipality;
        $candidate->message = $request->bericht;
        $candidate->date_applied = $date;
        $candidate->choices = "mentor";
        
        $candidate->save();

        $request->session()->flash('succeed', 'Uw aanvraag is verzonden!');

        return redirect()->back();

	}


}
