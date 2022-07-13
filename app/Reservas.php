<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    protected   $table='reservas';

	protected $primaryKey='idreservas';

	public $timestamps=false;

	protected $fillable =[
		'fecha_reserva',
		 'id_area',
		  'id_ambiente', 
		  'turno',
		   'id_usuario', 
		   'mensaje', 
		   'fecha_registro',
		    'usuario_registro',



			];

	protected $guarded =[

		



	];
}
