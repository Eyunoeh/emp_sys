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
        Schema::table('employment_info', function (Blueprint $table) {
            $table->enum('employment_status', [1, 2, 3])->change();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employment_info', function (Blueprint $table) {
            $table->string('employment_status')->change();
        });
    }
};
