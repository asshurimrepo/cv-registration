<?php


	/*
	 * @route /
	 * @name index
	 * @uses PaymentResponseController@index
	 * */
	Route::get( '/', [
		'as'   => 'index',
		'uses' => 'PaymentResponseController@index'
	] );

	/*
	 * @route payment-response
	 * @name payment.response
	 * @uses PaymentResponseController@handle
	 * */
	Route::get( 'payment', [
		'as'   => 'payment.response',
		'uses' => 'PaymentResponseController@handle'
	] );