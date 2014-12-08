<?php


class FormMeta extends Eloquent{
        
     protected $fillable = [];
     protected $table = 'wp_rg_form_meta';
     protected $appends = ['fields'];

     public function getFieldsAttribute()
     {

          return json_decode( $this->display_meta )->fields;

     }

}