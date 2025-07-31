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
            $table->date('regularization')->nullable()->change();
            $table->date('contract_end')->nullable()->change();
            $table->string('companyEmail')->nullable()->change();
            $table->string('alternativeEmail')->nullable()->change();
        });
        Schema::table('emp_info', function (Blueprint $table) {
            $table->string('middle_name')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employment_info', function (Blueprint $table) {
            $table->date('regularization')->nullable(false)->change();
            $table->date('contract_end')->nullable(false)->change();
            $table->string('companyEmail')->nullable(false)->change();
            $table->string('alternativeEmail')->nullable(false)->change();

        });
        Schema::table('emp_info', function (Blueprint $table) {
            $table->string('middle_name')->nullable(false)->change();

        });
    }
};
