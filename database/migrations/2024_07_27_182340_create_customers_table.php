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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->char('phone_number', 20);
            $table->unsignedBigInteger('trener_id')->nullable();
            $table->timestamps();

            $table->index('trener_id', 'custom_trener_idx');

            $table->foreign('trener_id', 'custom_trener_fk')->on('treners')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
