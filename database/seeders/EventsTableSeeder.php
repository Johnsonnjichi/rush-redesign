<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Event::create([
            'title' => 'Youth Empowerment Seminar',
            'description' => 'Building confidence and self-esteem',
            'date' => Carbon::now()->addDays(14),
            'location' => 'Nairobi Convention Center'
        ]);
    }    
}
