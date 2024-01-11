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
        Schema::table('users_conferences', function (Blueprint $table) {
            $table->unsignedBigInteger('userID')->after('id');
            $table->unsignedBigInteger('conferenceID')->after('userID');

            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('conferenceID')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_conferences', function (Blueprint $table) {
            //
        });
    }
};
