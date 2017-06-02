<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupYouthRequest;
use App\Http\Requests\SignupMentorRequest;


use App\Http\Requests;
use App\Candidate;

class CandidatesWebsiteController extends Controller
{

	public function createJongere(SignupYouthRequest $request)
	{
        $candidate = new Candidate();

        $candidate->first_name = $request->voornaam;
        $candidate->last_name = $request->achternaam;
        $candidate->telephone_number = $request->telefoonnummer;
        $candidate->date_of_birth = $request->geboortedatum;
        $candidate->email_address	 = $request->emailadres;
        $candidate->municipality = $request->gemeente;
        $candidate->message = $request->bericht;
        $candidate->choices = "jongere";

        $candidate->save();

        $request->session()->flash('succeed', 'Uw aanvraag is verzonden!');

        return redirect()->back();

	}

	public function createMentoren(SignupMentorRequest $request)
	{


        $candidate = new Candidate();

        $candidate->first_name = $request->voornaam;
        $candidate->last_name = $request->achternaam;
        $candidate->telephone_number = $request->telefoonnummer;
        $candidate->date_of_birth = $request->geboortedatum;
        $candidate->email_address	 = $request->emailadres;
        $candidate->municipality = $request->gemeente;
        $candidate->message = $request->bericht;
        $candidate->choices = "mentor";

        $candidate->save();

        $request->session()->flash('succeed', 'Uw aanvraag is verzonden!');

        return redirect()->back();

	}


}
