<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('c_id')->comment('댓글 번호');

            $table->integer('board_id')->unsigned()->comment('해당 게시글 번호');
            $table->foreign('board_id')->references('num')->on('boards')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamp('c_regtime')->comment('댓글 작성 일시');

            $table->string('c_writer', 100)->comment('댓글 작성자');
            $table->foreign('c_writer')->references('name')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->text('c_content')->comment('댓글 내용');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
