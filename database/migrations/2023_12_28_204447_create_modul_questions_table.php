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
        Schema::create('modul_questions', function (Blueprint $table) {
            $table->id(); 
            $table->bigInteger('modul_id')->unsigned();
            $table->foreign('modul_id')->references('id')->on('course_moduls')->onDelete('cascade');
            $table->string('modulType');
            $table->string('materi')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modul_questions');
    }
};
