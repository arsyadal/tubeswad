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
        Schema::create('course_moduls', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->bigInteger('course_category_id')->unsigned();
            $table->foreign('course_category_id')->references('id')->on('course_categories')->onDelete('cascade');
            $table->string('modul_name');
            $table->enum('modul_type', ['presentation', 'materi', 'foto/video', 'test']);
            $table->text('materi');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_moduls');
    }
};
