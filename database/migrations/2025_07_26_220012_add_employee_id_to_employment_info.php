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
            $table->foreignId('employee_id')->constrained('emp_info', 'emp_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employment_info', function (Blueprint $table) {
            $table->dropForeign('employment_info_employee_id_foreign');
            $table->dropColumn('employee_id');
        });
    }
};
