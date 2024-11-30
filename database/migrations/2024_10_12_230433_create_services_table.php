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
        Schema::create('services', function (Blueprint $table) {
            $table->integer('id');
            $table->string('image');
            $table->string('icon');
            $table->string('banner');
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('summary_ar');
            $table->string('summary_en');
            $table->string('desc_ar');
            $table->string('desc_en');
            $table->tinyInteger('publish');
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
        Schema::drop('services');
    }
};
