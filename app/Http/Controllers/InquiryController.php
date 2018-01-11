<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
	function inquire()
	{
		return view('contact-us');
	}
}
