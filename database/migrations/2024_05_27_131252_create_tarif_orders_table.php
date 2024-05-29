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
        Schema::create('tarif_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Saller::class);
            $table->text('card')->nullable()->comment('JSON состояние корзины заказа');
            $table->boolean('payed')->default(false);
            $table->date('begin')->nullable();
            $table->date('end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarif_orders');
    }
};
