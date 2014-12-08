<?php

	class EntryController extends \BaseController {

		/**
		 * Display a listing of the resource.
		 *
		 * @return Response
		 */
		public function index()
		{

			$entries = PaymentResponse::where('entry_id', '!=', 0)->get();
			$entries->load( 'notifications' );

//			dd($entries->toArray());

			return View::make( 'cv.list', compact( 'entries' ) );
		}


	}
