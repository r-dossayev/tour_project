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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string("title")->unique();
            $table->boolean("isActive")->default(false);
            $table->boolean("status")->default(false);
            $table->json("data"); //  language {"kz":"bla", "ru":"bla"}
            $table->string("pickup_point");
            $table->timestamp("start_time");
            $table->timestamp("end_time");
            $table->smallInteger("total");  // users in tour count
            $table->boolean("isFull");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
