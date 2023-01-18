<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * Модель Формы. От Формы нам нужны:
         */
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); // Пользователь, которому она принадлежит
            $table->string('name'); // Рабочее имя формы
            $table->text('description'); // Описание формы, комментарий
            $table->string('domain'); // Доменное имя, с которого мы ожидаем запрос
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
};
