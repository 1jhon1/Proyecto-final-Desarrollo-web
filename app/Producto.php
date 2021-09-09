<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';

        //llave primaria de la table tienda
        protected $primaryKey = 'id';
        //cuando ha sido creado o actualizado el regitro
        public $timestamps = false;
    
        // los campos que van a resivir un valor con fililable
    
        protected $fillable = [
            'id',
            'users_id',
            'nombre',
            'cantidad',
            'precio_anterior',
            'precio_actual',
            'descuento',
            'description',
            'imagen',
            'estado',
        ];
}
