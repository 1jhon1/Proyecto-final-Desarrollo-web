<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table='store';

        //llave primaria de la table tienda
        protected $primaryKey = 'id';
        //cuando ha sido creado o actualizado el regitro
        public $timestamps = false;
    
        // los campos que van a resivir un valor con fililable
    
        protected $fillable = [
            'id',
            'id_users',
            'name_store',
            'city',
            'num_phone',
            'direction',
            'type_business',
            'description',
            'latitud',
            'longitud',
            'logo_company',
            'status_business',
            'lunes',
            'lunes2',

            'martes',
            'martes2',

            'miercoles',
            'miercoles2',

            'jueves',
            'jueves2',

            'viernes',
            'viernes2',

            'sabado',
            'sabado2',

            'domingo',
            'domingo2',

            'created_at',
            'updated_at'  
        ];
    
        //tambien podemos agregar atributos de tipos guarded    se especica cuando no queremos que se agregauen al mode locd
        protected $guarded = [
    
        ];
}

