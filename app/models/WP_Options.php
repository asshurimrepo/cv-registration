<?php

	class WP_Options extends Eloquent {

		protected $fillable = [ ];
		protected $table = 'wp_options';

		/**
		 * @return mixed
		 */
		public static function fetch()
		{

			return (new static)->fetchDataOptions();
		}

		/**
		 * @return $this
		 */
		public function fetchDataOptions()
		{
			foreach ( $this->all() as $data )
			{
				$this->{$data->option_name} = $data->option_value;
			}

			return $this;
		}

	}