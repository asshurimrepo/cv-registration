<?php

	/*
	 * @route payment-response
	 * @name payment.response
	 * @uses PaymentResponseController@handle
	 * */
	Route::get( 'payment-response', [
		'as'   => 'payment.response',
		'uses' => 'PaymentResponseController@handle'
	] );