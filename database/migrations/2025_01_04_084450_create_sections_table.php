<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Add name column
            $table->string('title_ar'); // Add Arabic title column
            $table->string('title_en'); // Add English title column
            $table->unsignedInteger('page_id'); // Match `pages.id`
            $table->unsignedBigInteger('sub_page_id')->nullable(); // Match `sub_pages.id`
            $table->text('content_ar');
            $table->text('content_en');
            $table->string('image_path')->nullable(); // New nullable column after `content_en`
            $table->boolean('is_publish')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        
            // Define foreign key for `page_id`
            $table->foreign('page_id')
                ->references('id')
                ->on('pages')
                ->onDelete('cascade');
        
            // Define foreign key for `sub_page_id`
            $table->foreign('sub_page_id')
                ->references('id')
                ->on('sub_pages')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
