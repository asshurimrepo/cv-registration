<?php

	class PaymentResponseController extends \BaseController {

		public function index()
		{
			return gethostname();
		}

		public function handle()
		{
			Log::info( json_encode( Input::all() ) );

			return Input::all();
		}


	}
