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
        Schema::table('users_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('userID')->after('id');
            $table->unsignedBigInteger('roleID')->after('userID');

            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('roleID')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_roles', function (Blueprint $table) {
            //
        });
    }
};
