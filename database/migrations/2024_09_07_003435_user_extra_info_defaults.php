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
        Schema::table('users', function (Blueprint $table) {
            $table->string('momo_number')->nullable();
            $table->string('timezone')->default('UTC');
            $table->enum('language', ['english'])->default('english');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('momo_number');
            $table->dropColumn('timezone');
            $table->dropColumn('language');
        });
    }
};
