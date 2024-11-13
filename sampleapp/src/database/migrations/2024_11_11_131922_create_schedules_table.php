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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day'); //Ngasih tau hari
            $table->date('date'); //Ngasih tau tanggal
            $table->time('start_time'); //Ngasih tau waktu dimulai
            $table->time('end_time'); //Ngasih tau waktu berakhir
            $table->string('duration_time'); //Ngasih tau waktu berakhir
            $table->string('course_name'); //Ngasih tau nama mata kuliah
            $table->integer('meeting_number'); //Ngasih tau pertemuan ke berapa 
            $table->string('lecturer'); //Ngasih tau dosen yang mengajar 
            $table->string('room'); //Ngasih tau ruang kelasnya dimana 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
