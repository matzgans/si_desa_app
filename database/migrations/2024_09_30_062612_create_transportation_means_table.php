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
        Schema::create('transportation_means', function (Blueprint $table) {
            $table->id();
            $table->foreignId('village_id')->constrained('villages')->default('unknown');
            $table->string('vehicle_type');
            $table->integer('total_count')->default(0);
            $table->integer('owner_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportation_means');
    }
};
