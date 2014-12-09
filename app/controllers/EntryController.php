<?php

	class EntryController extends \BaseController {

		/**
		 * Display a listing of the resource.
		 *
		 * @return Response
		 */
		public function index()
		{

			$online_entries = PaymentResponse::where( 'entry_id', '!=', 0 )->get();
			$online_entries->load( 'notifications' );

//			dd($online_entries->toArray());
//			$free_entries = LeadDetails::where( 'value', '2checkout' )->join('wp_rg_lead_detail')->get();

			$free_entries = LeadDetails::where('value', 'like', 'Free%')->groupBy('lead_id')->get();
			$free_entries->load('lead_details');

//			dd($free_entries->toArray());

			$bank_entries = LeadDetails::where('value', 'Bank Account')->get();
			$bank_entries->load('lead_details');




//			dd( $free_entries->toArray() );

//			dd($entries->toArray());

			return View::make( 'cv.list', compact( 'online_entries', 'free_entries', 'bank_entries' ) );
		}


	}
