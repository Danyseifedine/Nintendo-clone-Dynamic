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
        Schema::create('product_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->unique()->constrained()->onDelete('cascade');
            $table->string('file_size', 50)->nullable();
            $table->string('supported_play_modes')->nullable();
            $table->string('number_of_players', 100)->nullable();
            $table->string('genre', 100)->nullable();
            $table->string('online_features')->nullable();
            $table->string('system', 100)->nullable();
            $table->string('publisher', 100)->nullable();
            $table->string('developer', 100)->nullable();
            $table->text('supported_languages')->nullable();
            $table->date('release_date')->nullable();
            $table->string('esrb_rating', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_info');
    }
};
