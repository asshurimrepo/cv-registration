<?php

	class PaymentResponseController extends \BaseController {

		public function index()
		{
			return gethostname();
		}

		public function handle()
		{
			PaymentResponse::create([
				
				'data' => serialize(['name'=>'ash']),
				'entry_id' => 1,
				
			]);

			return;
		}


	}
