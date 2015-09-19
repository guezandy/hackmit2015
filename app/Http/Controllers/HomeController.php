<?php namespace App\Http\Controllers;


use DB;
use Input;
use App\Paragraph;
use App\AnswerTo;
use View;


class HomeController extends Controller {

	public function home() {
		return view('home');
	}

	public function gallery() {
		return view('gallery');
	}

	public function video() {
		return view('video');
	}
}
