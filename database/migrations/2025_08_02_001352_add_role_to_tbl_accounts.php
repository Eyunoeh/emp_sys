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
        Schema::table('tbl_accounts', function (Blueprint $table) {
            $table->enum('role', ['HR Supervisor', 'HR Admin', 'Employee'])->default('Employee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_accounts', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
