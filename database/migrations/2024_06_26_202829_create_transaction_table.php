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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->dateTime('transaction_date');
            $table->foreignId('transaction_category_id')->constrained()->onDelete('cascade');
            $table->foreignId('transaction_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('card_id')->constrained()->onDelete('cascade');
            $table->foreignId('destination_id')->constrained()->onDelete('cascade');
            $table->foreignId('transaction_status_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
