<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('home_id');
            $table->integer('amount');
            $table->string('time');
            $table->date('date');
            $table->string('area'); // Lưu khu vực ăn hoặc lưu tên du thuyền
            $table->tinyInteger('type'); //1: suất ăn    ; 2: du thuyền
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
        Schema::dropIfExists('customers');
    }
}
