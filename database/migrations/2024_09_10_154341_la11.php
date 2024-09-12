<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_grupos',function(Blueprint $table){
            $table->bigIncrements('id_grupos');
            $table->string('clave');
            $table->string('nombre');
            $table->string('cuatrimestre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_grupos');
    }
};
