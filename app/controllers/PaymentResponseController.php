<?php

class PaymentResponseController extends \BaseController {

	public function index()
	{
		return View::make('hello');
	}

	public function handle()
	{
		return 1;
//		return Input::all();
	}


}
