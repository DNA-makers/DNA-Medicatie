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
        Schema::create('advise', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('gen_id')->constrained('gen')->onDelete('cascade');
            $table->string('title');
            $table->string('gen_code');
            $table->text('advise');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advise');
    }
};
