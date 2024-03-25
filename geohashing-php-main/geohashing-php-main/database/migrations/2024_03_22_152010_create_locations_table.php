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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('org_id');
            $table->string('geohash_3');
            $table->string('geohash_4');
            $table->string('geohash_5');
            $table->string('geohash_6');
            $table->string('geohash_7');
            $table->string('geohash_8');
            $table->string('geohash_9');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
