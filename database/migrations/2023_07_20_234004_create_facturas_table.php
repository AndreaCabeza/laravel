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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('medio_pago');
            $table->string('clase_factura');
            $table->string('cliente')->nullable();
            $table->unsignedDecimal('monto',12,2);
            $table->integer('codigo_factura')->unique();
            $table->string('correo');
            $table->dateTime('fecha_hora');
            $table->foreignId('factura_id')->constrained();
            $table->foreignId('cerveza_id')->constrained('cervezas');
            $table->foreignId('menu_id')->constrained('menu');
            $table->foreignId('cliente_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
