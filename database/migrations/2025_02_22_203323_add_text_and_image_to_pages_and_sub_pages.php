<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {


        Schema::table('sub_pages', function (Blueprint $table) {
            $table->text('summary_ar')->nullable();
            $table->text('summary_en')->nullable();
            $table->text('desc_ar')->nullable();
            $table->text('desc_en')->nullable();
            $table->string('image')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['summary_ar', 'summary_en', 'desc_ar', 'desc_en', 'image']);
        });

        Schema::table('sub_pages', function (Blueprint $table) {
            $table->dropColumn(['summary_ar', 'summary_en', 'desc_ar', 'desc_en', 'image']);
        });
    }
};
