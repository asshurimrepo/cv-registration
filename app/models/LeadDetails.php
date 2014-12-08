<?php


	class LeadDetails extends Eloquent {

		protected $fillable = [ ];
		protected $table = 'wp_rg_lead_detail';
		protected $appends = [ 'field_name' ];


		public function getFieldNameAttribute()
		{
			$field_meta = $this->field_meta();

			return count($field_meta) ? $field_meta[0]->label : [];

		}


		public function field_meta()
		{
			$form_meta  = $this->hasOne( 'FormMeta', 'form_id', 'form_id' )->remember( 30 )->first()->fields;
			$field_meta = array_filter( $form_meta, function ( $e )
			{
				return $e->id == $this->field_number;
			} );

			return array_values($field_meta);
		}

		public function lead_details()
		{
			return $this->hasMany('LeadDetails', 'lead_id', 'lead_id')->orderBy('field_number', 'asc');
		}

	}