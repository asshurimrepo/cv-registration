<?php




class Lead extends Eloquent{
        
     protected $fillable = [];
     protected $table = 'wp_rg_lead';
     protected $with = 'form_meta';


     public function form_meta()
     {
          return $this->hasOne('FormMeta','form_id', 'form_id')->remember(10);
     }
    
}