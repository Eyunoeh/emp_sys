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
        Schema::create('emp_info', function (Blueprint $table) {
            $table->id('emp_id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('address');
            $table->string('gender');
            $table->string('contact_number');
            $table->date('birth_date');
            $table->string('marital_status');
            $table->string('emp_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_info');
    }
};
