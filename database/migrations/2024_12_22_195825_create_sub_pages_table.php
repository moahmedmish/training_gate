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
        Schema::create('sub_pages', function (Blueprint $table) {
            $table->id(); // Equivalent to bigint(20) unsigned with auto-increment
            $table->string('name', 255);
            $table->string('title_ar', 255);
            $table->string('title_en', 255);
            $table->string('publish', 255);
            $table->integer('menu_order')->nullable(); // Default: NULL
            $table->string('route_name', 255)->nullable(); // Default: NULL
            $table->foreignId('page_id')->nullable()->constrained('pages')->nullOnDelete(); // page_id as foreign key
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_pages');
    }
};