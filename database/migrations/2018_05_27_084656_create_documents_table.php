<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('author_id')->unsigned();
            $table->integer('editor_id')->default('NULL')->unsigned();
            $table->foreign('author_id')->references('id')->on('users');
            $table->integer('directory_id')->unsigned();
            $table->string('path');
            $table->boolean('is_accepted')->default(0);
            $table->foreign('editor_id')->nullable()->references('id')->on('users');
            $table->foreign('directory_id')->references('id')->on('file_directories');
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
        Schema::dropIfExists('documents');
    }
}
