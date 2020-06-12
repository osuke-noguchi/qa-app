<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('質問のタイトル');
            $table->string('slug')->unique()->comment('slug url');
            $table->text('body')->comment('質問の本文');
            $table->unsignedInteger('views')->default(0)->comment('質問の表示回数');
            $table->unsignedInteger('answers')->default(0)->comment('質問の回答数');
            $table->integer('votes')->default(0)->comment('質問への投票数');
            $table->unsignedInteger('best_answer_id')->nullable()->comment('ベストアンサー');
            $table->unsignedInteger('user_id')->default(0)->comment('質問をしたユーザー');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
