<?php


	/*
	 * @route /
	 * @name index
	 * @uses PaymentResponseController@index
	 * */
	Route::get( '/', [
		'as'   => 'index',
		'uses' => 'EntryController@index'
	] );

	/*
	 * @route payment-response
	 * @name payment.response
	 * @uses PaymentResponseController@handle
	 * */
	Route::post( 'payment', [
		'as'   => 'payment.response',
		'uses' => 'PaymentResponseController@handle'
	] );