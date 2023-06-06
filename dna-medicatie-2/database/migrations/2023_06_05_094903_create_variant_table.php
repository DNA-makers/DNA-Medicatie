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
        Schema::create('variant', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('gen_id')->constrained('gen')->onDelete('cascade');
            $table->string('gen_code');
            $table->string('allel_a')->nullable();
            $table->string('allel_b')->nullable();
            $table->boolean('unphased')->nullable();
            $table->text('covered');
            $table->text('not_covered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant');
    }
};
