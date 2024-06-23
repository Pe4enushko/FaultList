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
        Schema::create('fault_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fault_id')->unsigned();
            $table->foreign('fault_id')->references('id')->on('faults')->onDelete('cascade');
            $table->string('image_path', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faultimages');
    }
};
