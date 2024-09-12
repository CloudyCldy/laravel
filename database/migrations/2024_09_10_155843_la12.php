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
        Schema::create('tb_alumno_grupo',function(Blueprint $table){
            $table->bigIncrements('id_alumno_grupo');
            $table->string('id_alumno');
            $table->string('id_grupo');
            $table->boolean('activo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_alumno_grupo');
    }
};
