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
        Schema::create('encuesta', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo',250);
            $table->string('email',100);
            $table->string('telefono',15);
            $table->string('nivel_sastifaccion',100);
            $table->string('sugerencias',250)->nullable();
          

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuesta');
    }
};
