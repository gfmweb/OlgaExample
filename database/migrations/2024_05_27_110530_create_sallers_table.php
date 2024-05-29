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
        Schema::create('sallers', function (Blueprint $table) {
            $table->id();
            $table->ulid('seller_uid')->unique();
            $table->foreignIdFor(\App\Models\User::class);
            $table->string('name')->nullable();
            $table->integer('orders')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sallers');
    }
};
