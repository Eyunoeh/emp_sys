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
        Schema::create('employment_info', function (Blueprint $table) {
            $table->id('employment_info_id');
            $table->timestamps();
            $table->string('employment_status');
            $table->string('employeeID', 12)->unique()->index();
            $table->date('dateHired');
            $table->string('regularization');
            $table->string('contract_end');
            $table->string('companyEmail');
            $table->string('alternativeEmail');
            $table->decimal('Rate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employment_info');
    }
};
