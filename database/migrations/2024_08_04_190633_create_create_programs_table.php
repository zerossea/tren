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
        Schema::create('create_programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('title_id')->nullable();
            $table->unsignedBigInteger('training_number_id')->nullable();
            $table->unsignedBigInteger('formula_id')->nullable();
            $table->integer("weight_max");

            $table->timestamps();

            $table->index('title_id', 'create_program_title_idx');

            $table->foreign('title_id', 'create_program_title_fk')->on('exercises')->references('id');

            $table->index('formula_id', 'create_program_formula_idx');

            $table->foreign('formula_id', 'create_program_formula_fk')->on('formulas')->references('id');

            $table->index('training_number_id', 'create_program_training_number_idx');

            $table->foreign('training_number_id', 'create_program_training_number_fk')->on('training_numbers')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_programs');
    }
};
