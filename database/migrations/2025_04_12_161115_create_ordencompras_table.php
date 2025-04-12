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
        Schema::create('ordencompras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('productos_id')->constrained();
            $table->foreignId('proveedores_id')->constrained();
            $table->integer('cantidad');
            $table->date('fecha_orden');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordencompras');
    }
};
