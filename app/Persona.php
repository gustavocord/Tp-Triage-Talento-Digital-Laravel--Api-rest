<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    protected $table = 'persona';
    public $timestamps = false;
   use softDeletes;

    public function NivelDeUrgencia() {
 		return $this->belongsTo('App\NivelDeUrgencia','nivel_de_urgencia_id'); //hace la relacion con estado de animo
 			}

}
