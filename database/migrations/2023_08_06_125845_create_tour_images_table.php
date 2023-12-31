<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Core\Tour;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tour_images', function (Blueprint $table) {
            $table->id();
            $table->string("path")->unique();
            $table->boolean("isBanner")->default(false);
            $table->foreignIdFor(Tour::class, 'tour_id' )
                ->constrained('tours')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_images');
    }
};
