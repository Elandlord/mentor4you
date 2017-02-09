<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class MentorCandidateController extends Controller
{
    public function index(){
    	$data = [
            'candidates' => Candidate::where('choices', '=', 'mentor')->paginate(10),
        ];

        return view('cms.pages.candidates.index', compact('data'));
    }
}
