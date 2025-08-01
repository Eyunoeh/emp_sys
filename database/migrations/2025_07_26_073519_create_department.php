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
        Schema::create('department', function (Blueprint $table) {
            $table->id('department_id');
            $table->timestamps();
            $table->string('department_name');
            $table->string('position');
            $table->string('designation');
            $table->foreignId('employee_id')->constrained('emp_info', 'emp_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('department');
    }
};
