<?php

	class PaymentResponseController extends \BaseController {

		public function index()
		{
			return gethostname();
		}

		public function handle()
		{
			PaymentResponse::create([
				
				'data' => serialize(Input::all()),
				'entry_id' => Input::get(''),
				
			]);

			return;
		}


	}
