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
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->char('name','32')->unique()->comment('Уникальное служебное имя');
            $table->string('alias')->nullable()->comment('Название для отображения');
            $table->boolean('zip')->default(false)->comment('Признак что не доступен для подключения');
            $table->dateTime('zipped_at')->nullable()->comment('Дата и время перемещения в архив');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools');
    }
};
