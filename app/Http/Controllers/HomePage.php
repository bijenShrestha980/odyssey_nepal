<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Work;

class HomePage extends Controller{

	public function index(){
		$work = new Work();

		$recent = $work->user();
		return view('index');
	}

	function aboutUsIndex(){
		return view('others/about_us');
	}

	function galleryIndex(){
		return view('others/gallery');
	}

	function departmentsIndex(){
		return view('others/departments');
	}

	function ourTeamIndex(){
		return view('others/our_team');
	}

	function contactUsIndex(){
		return view('others/contact_us');
	}

	function bloodDonationIndex(){
		return view('works/blood_donation');
	}

}