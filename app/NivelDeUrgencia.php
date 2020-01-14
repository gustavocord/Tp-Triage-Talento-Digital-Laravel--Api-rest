<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NivelDeUrgencia extends Model
{
	protected $table= 'nivel_de_urgencia';
	public $timestamps=false;
	 use softDeletes;


	  public function Personas()
 	{
 		return $this->hasMany('App\Persona');

 	}
}
