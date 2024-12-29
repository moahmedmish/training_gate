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
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([ 'banner1', 'banner2', 'video_url', 'summary_ar', 'summary_en', 'description_ar', 'description_en', 'on_menu']);

            $table->string('name')->nullable()->after('id');
            $table->boolean('has_sub')->default(false)->after('title_en');
            $table->boolean('show_footer')->default(true)->after('route_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['name', 'has_sub', 'show_footer']);

            $table->string('banner2')->nullable()->after('id');
            $table->string('banner1')->nullable()->after('title_ar');
            $table->string('video_url')->nullable()->after('title_ar');
            $table->text('summary_ar')->nullable()->after('title_ar');
            $table->text('summary_en')->nullable()->after('title_ar');
            $table->text('description_ar')->nullable()->after('title_ar');
            $table->text('description_en')->nullable()->after('title_ar');
        });
    }
};
