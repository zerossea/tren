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
        Schema::create('weights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('title_id')->nullable();
            $table->integer("weight_max")->default(0);
            $table->timestamps();

            $table->index('title_id', 'weight_title_idx');

            $table->foreign('title_id', 'weight_title_fk')->on('exercises')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weights');
    }
};
