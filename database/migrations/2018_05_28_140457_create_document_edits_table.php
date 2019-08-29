<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentEditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_edits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('original_id')->unsigned();
            $table->foreign('original_id')->references('id')->on('documents');
            $table->integer('editor_id')->unsigned();
            $table->foreign('editor_id')->references('id')->on('users');
            $table->string('name');
            $table->string('description');
            $table->integer('directory_id')->unsigned();
            $table->foreign('directory_id')->references('id')->on('file_directories');
            $table->string('path');
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
        Schema::dropIfExists('document_edits');
    }
}
