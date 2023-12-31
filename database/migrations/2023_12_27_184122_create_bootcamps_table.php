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
        Schema::create('bootcamps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('course_categories')->onDelete('cascade');
            $table->string('namaBootcamp');
            $table->string('prospekKarier');
            $table->text('benefitBootcamp');
            $table->string('kurikulum_silabus');
            $table->text('sistemBelajar');
            $table->string('faq');
            $table->string('forum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bootcamps');
    }
};
