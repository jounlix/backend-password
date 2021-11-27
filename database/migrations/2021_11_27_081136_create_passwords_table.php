<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passwords', function (Blueprint $table) {
            $table->id();
            $table->text('password_cash')->nullable()->comment('Кэш пароля');
            $table->integer('symbols')->nullable()->comment('Количество символов');
            $table->text('variants_symbols')->nullable()->comment('Допустимые символы');
            $table->dateTime('created_at')->comment('Время создания');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passwords');
    }
}
