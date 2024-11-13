<?php

namespace Database\Seeders;

use App\Models\Schedules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedules::create([
            'day' => 'Senin',
            'date' => '2024-11-13',
            'start_time' => '08:00:00',
            'end_time' => '10:00:00',
            'duration_time' => '2 Jam',
            'course_name' => 'Design dan Analisis Algoritma',
            'meeting_number' => 1,
            'lecturer' => 'Jefry Sunupurwa',
            'room' => 'CR. 404'
        ]);
    }
}
