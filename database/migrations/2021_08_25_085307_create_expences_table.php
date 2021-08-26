<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expences', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('person_id')->unsigned();
            $table->integer('category_id')->unsigned(); //カテゴリーテーブルの対応するID
            $table->integer('money'); //金額
            $table->string('memo',50); //メモ
            $table->date('write_date'); //日にち
            $table->timestamps();

            //外部キーを設定する
            // $table->foreign('person_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expences');
    }
}
