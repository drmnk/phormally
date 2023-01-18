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
         * Модель Поля Формы
         */
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id'); // Какой форме принадлежит поле?
            $table->string('name'); // Рабочее название поля
            $table->string('description'); // Описание поля
            $table->boolean('required'); // Ожидаем ли мы это обязательно поле при проверке
            $table->string('type'); // кастинг в Enum FieldType в модели
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
        Schema::dropIfExists('fields');
    }
};
