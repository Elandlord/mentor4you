<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Newsletter;

class NewslettersWebsiteController extends Controller
{
    
	public function addEmail(Request $request)
	{
		$this->validate($request, [
	        'email' => 'required|unique:newsletters|max:255',
    	]);

		$newsletter = Newsletter::create($request->all());

		$request->session()->flash('addEmail', 'U bent succesvol ingeschreven voor de nieuwsbrief!');

		return redirect()->back();
	}

}
