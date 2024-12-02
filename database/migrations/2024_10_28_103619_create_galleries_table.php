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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id('id');
            $table->string('image')->nullable();
            $table->string('video_url')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->enum('category', ['Marble', 'Stone', 'Onyx', 'Granite']);
            $table->string('summary_ar')->nullable();
            $table->string('summary_en')->nullable();
            $table->integer('order')->unsigned()->default(32144213);
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
        Schema::drop('galleries');
    }
};
