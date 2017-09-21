<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class YouthCandidateController extends Controller
{
    public function index(){

    	$data = [
            'candidates' => Candidate::where('choices', '=', 'jongere')->get(),
        ];

        return view('cms.pages.candidates.index', compact('data'));
    }
}
