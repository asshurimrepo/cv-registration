<?php

	class PaymentResponseController extends \BaseController {

		public function index()
		{
			return gethostname();
		}

		public function handle()
		{
			$payment_response = new PaymentResponse();

			$payment_response->data = serialize(Input::all());
			$payment_response->entry_id = Input::get('entry_id');

			$payment_response->save();

			return;
		}


	}
