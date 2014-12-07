<?php

class PaymentResponseController extends \BaseController {

	public function index()
	{
		return gethostname();
	}

	public function handle()
	{
		return 1;
//		return Input::all();
	}


}
