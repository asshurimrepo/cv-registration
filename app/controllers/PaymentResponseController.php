<?php

	class PaymentResponseController extends \BaseController {

		public function index()
		{
			dd( WPOptions::fetch()->siteurl );

			return;
		}

		public function handle()
		{
//			Create DB Model
			PaymentResponse::create( [

				'invoice_id' => Input::get( 'invoice_id' ),
				'entry_id'   => Input::get( 'entry_id', 0 ),
				'data'       => serialize( Input::all() ),

			] );

//          Redirect TO Success page if has an entry_id
			if ( Input::has( 'entry_id' ) )
			{
				return Redirect::to( WPOptions::fetch()->siteurl . '/success-payments' );
			}

			return true;
		}


	}
