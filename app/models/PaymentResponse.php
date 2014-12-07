<?php

class PaymentResponse extends Eloquent{
        
     protected $fillable = ['data', 'entry_id'];
     protected $table = 'cv_payment_response';
    
}