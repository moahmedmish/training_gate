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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('id');
            $table->string('banner');
            $table->string('image');
            $table->string('title_ar');
            $table->string('title_en');
            $table->enum('category', ['exterior','interior','washbasins','flooring','stairs','table','others']);
            $table->text('summary_ar');
            $table->text('summary_en');
            $table->integer('order');
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
        Schema::drop('projects');
    }
};
