<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('users_id')->nullable();
            $table->string('nombre')->unique();
            $table->BigInteger('cantidad')->unsigned()->default(0);
            $table->decimal('precio_anterior',12,2)->unsigned()->default(0);
            $table->decimal('precio_actual',12,2)->unsigned()->default(0);
            $table->BigInteger('descuento')->unsigned()->default(0);
            $table->text('description')->nullable();
            $table->string('imagen')->nullable();
            $table->boolean('estado')->default(1);
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
        Schema::dropIfExists('productos');
    }
}
