<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_users'); 
            $table->string('name_store')->nullable();
            $table->string('city')->nullable();
            $table->string('num_phone')->nullable(); 
            $table->string('direction')->nullable(); 
            $table->string('type_business')->nullable();
            $table->text('description')->nullable();
            $table->string('latitud')->nullable(); 
            $table->string('longitud')->nullable(); 
            $table->string('logo_company')->nullable(); 
            $table->string('status_business')->nullable(); 
            $table->string('lunes')->nullable(); 
            $table->string('lunes2')->nullable(); 

            $table->string('martes')->nullable(); 
            $table->string('martes2')->nullable(); 

            $table->string('miercoles')->nullable(); 
            $table->string('miercoles2')->nullable(); 

            $table->string('jueves')->nullable(); 
            $table->string('jueves2')->nullable(); 

            $table->string('viernes')->nullable(); 
            $table->string('viernes2')->nullable(); 

            $table->string('sabado')->nullable(); 
            $table->string('sabado2')->nullable(); 

            $table->string('domingo')->nullable(); 
            $table->string('domingo2')->nullable(); 


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store');
    }
}
