<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table='client';

        //llave primaria de la table tienda
        protected $primaryKey = 'id';
        //cuando ha sido creado o actualizado el regitro
        public $timestamps = false;
    
        // los campos que van a resivir un valor con fililable
    
        protected $fillable = [
            'id',
            'id_users',
            'name_client',
            'apellido_client',
            'identity_client',
            'sex_client',
            'num_phone_client',
            'direction',
            'Photo_client',
            'longitud',
            'longitud',
            'created_at',
            'updated_at'  
        ];
    
        //tambien podemos agregar atributos de tipos guarded    se especica cuando no queremos que se agregauen al mode locd
        protected $guarded = [
    
        ];
}

