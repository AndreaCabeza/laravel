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
        Schema::create('cervezas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',250);
            $table->string('clase',250);
            $table->string('descripcion',250);
            $table->unsignedDecimal('precio',12,2);
            $table->integer('stock');
            $table->integer('codigo')->unique();
            $table->boolean('activo')->default(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cervezas');
    }

};
 // public function up(): void
//  {
//     Schema::table('cervezas', function (Blueprint $table) {
//         $table->string('status')->after('email')->default('active');
//     });
// }