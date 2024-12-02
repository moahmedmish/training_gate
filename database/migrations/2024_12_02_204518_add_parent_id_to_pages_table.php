<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->unsignedInteger('parent_id')->nullable()->after('id'); // Add the parent_id column
            $table->foreign('parent_id')->references('id')->on('pages')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropForeign(['parent_id']); // Drop foreign key constraint
            $table->dropColumn('parent_id');    // Drop the parent_id column
        });
    }
};
