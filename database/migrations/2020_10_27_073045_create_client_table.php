<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_users')->nullable(); 
            $table->string('name_client');
            $table->string('apellido_client')->nullable();
            $table->string('identity_client')->nullable(); 
            $table->char('sex_client',2)->nullable(); 
            $table->string('num_phone_client')->nullable();
            $table->string('direction')->nullable();
            $table->string('Photo_client')->nullable();
            $table->string('latitud')->nullable(); 
            $table->string('longitud')->nullable(); 
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
        Schema::dropIfExists('client');
    }
}
