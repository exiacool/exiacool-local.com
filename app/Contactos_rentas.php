<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos_rentas extends Model
{
    protected $table='contactos_rentas';

    protected $primaryKey='id_contacto';

    public $timestamps=false;

    protected $fillable=[
        'id_contacto'
		'nombre',
		'apellido',
		'telefono',
		'detalle' 

    ];

    protected $guarded=[

    


    ];



}
