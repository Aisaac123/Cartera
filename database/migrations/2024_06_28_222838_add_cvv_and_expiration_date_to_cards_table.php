<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->string('cvv')->after('wallet_id');
            $table->date('expiration_date')->after('cvv');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->dropColumn('cvv');
            $table->dropColumn('expiration_date');
        });
    }
};
