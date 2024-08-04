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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('title_id')->nullable();
            $table->integer('approach');
            $table->integer('repetition');
            $table->integer('weight');
            $table->unsignedBigInteger('training_number_id')->nullable();
            $table->unsignedBigInteger('formula_id')->nullable();
            $table->timestamps('');

            $table->index('title_id', 'program_title_idx');

            $table->foreign('title_id', 'program_title_fk')->on('exercises')->references('id');

            $table->index('formula_id', 'program_formula_idx');

            $table->foreign('formula_id', 'program_formula_fk')->on('formulas')->references('id');

            $table->index('training_number_id', 'program_training_number_idx');

            $table->foreign('training_number_id', 'program_training_number_fk')->on('training_numbers')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
