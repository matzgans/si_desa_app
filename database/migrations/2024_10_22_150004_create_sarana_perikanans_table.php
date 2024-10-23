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
        Schema::create('sarana_perikanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('village_id')->nullable()->constrained('villages')->onDelete('set null');
            $table->string('tambatan')->default(0);
            $table->string('pasar_ikan')->default(0);
            $table->string('pajeko')->default(0);
            $table->string('kapal_ikan')->default(0);
            $table->string('perahu_bodi')->default(0);
            $table->string('mesin_tempel')->default(0);
            $table->string('katintin')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_perikanans');
    }
};
