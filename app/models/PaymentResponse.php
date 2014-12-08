<?php

	class PaymentResponse extends Eloquent {

		protected $fillable = [ 'data', 'entry_id', 'invoice_id' ];
		protected $table = 'cv_payment_response';
		protected $with = [ 'leadDetails', 'lead' ];
		protected $appends = [ 'info' ];


		/**
		 * @return mixed
		 */
		public function getInfoAttribute()
		{
			return unserialize( $this->data );
		}

		/**
		 * @return mixed
		 */
		public function notifications()
		{
//			return $this->entry_id;
			return $this->hasMany('PaymentResponse', 'invoice_id', 'invoice_id')->where('entry_id', '!=', $this->entry_id);
		}


		/**
		 * @return \Illuminate\Database\Eloquent\Relations\HasMany
		 */
		public function leadDetails()
		{
			return $this->hasMany( 'LeadDetails', 'lead_id', 'entry_id' );
		}

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\HasOne
		 */
		public function lead()
		{
			return $this->hasOne( 'Lead', 'id', 'entry_id' );
		}

		/**
		 * @return mixed
		 */
		private function getEntryId()
		{
			return $this->entry_id;
		}

	}