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
            $table->string('lastname')->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('familyid')->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('validate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('lastname');
            $table->dropColumn('birthdate');
            $table->dropColumn('familyid');
            $table->dropColumn('status');
            $table->dropColumn('validate');
        });
    }
};
