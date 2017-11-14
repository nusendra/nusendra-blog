<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->string('judul',50);
          $table->string('slug',250)->unique();
          $table->longText('isi');
          $table->text('ringkasan');
          $table->tinyInteger('status_terbit')->default(1);
          $table->dateTime('tgl_terbit');
          $table->timestamps();
          $table->softDeletes();
          $table->integer('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
