<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membresias extends Model
{
     protected   $table='membresias';

	protected $primaryKey='idmembresias';

	public $timestamps=false;

	protected $fillable =[
		'tipo_membresia',
		 'id_persona',
		  'fecha_inicio', 
		  'fecha_fin',
		   'monto', 
		   'id_asesor', 
		   'nuero_cuotas',
		    'pago_inicial',



			];

	protected $guarded =[

		



	];
}
