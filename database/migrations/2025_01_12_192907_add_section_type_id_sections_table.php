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
        //add section_type_id column to sections table after sub_page_id column
        Schema::table('sections', function (Blueprint $table) {
            $table->unsignedBigInteger('section_type_id')->nullable()->after('sub_page_id');
            $table->foreign('section_type_id')->references('id')->on('section_types');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('sections', function (Blueprint $table) {
            $table->dropForeign(['section_type_id']);
            $table->dropColumn('section_type_id');
        });
    }
};
