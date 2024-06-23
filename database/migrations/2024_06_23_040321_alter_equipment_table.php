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
        Schema::table('equipment', function(Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('faults', function(Blueprint $table) {
            $table->softDeletes();
            $table->dropForeign('faults_equipment_id_foreign');
            $table->foreign('equipment_id')->references('id')->on('equipment')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipment', function(Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('faults', function(Blueprint $table) {
            $table->dropSoftDeletes();
            $table->dropForeign('faults_equipment_id_foreign');
            $table->foreign('equipment_id')->references('id')->on('equipment');
        });
    }
};
