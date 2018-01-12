<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use DB;

class InquiryController extends Controller
{
	function inquire()
	{
		return view('contact-us');
	}
	
	function store(Request $request)
	{
		$this->validate($request,[
			  'name' => 'required',
			  'email' => 'required',
			  'message' => 'required',
		 ]);
		 
		 $inquiry = new Inquiry;
		 $inquiry->name = $request->input('name');
		 $inquiry->email = $request->input('email');
		 $inquiry->message = $request->input('message');
		 $inquiry->save();
		 
		 return redirect('inquire')->with('success','Successfully inquired.');
	}
	
}

