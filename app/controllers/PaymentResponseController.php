<?php

	class PaymentResponseController extends \BaseController {

		public function index()
		{
			dd( WP_Options::fetch() );

			return;
		}

		public function handle()
		{
			PaymentResponse::create( [

				'data'     => serialize( Input::all() ),
				'entry_id' => Input::get( 'entry_id', 0 ),

			] );

			return;
		}


	}
