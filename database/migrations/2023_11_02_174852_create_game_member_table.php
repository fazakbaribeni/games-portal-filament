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
        Schema::create('game_member', function (Blueprint $table) {
            $table->id();
            $table->integer('score');
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('game_id');
            $table->boolean('is_winner')->default(false);
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members');
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_member');
    }
};
