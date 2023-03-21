<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(AirlineSeeder::class);
       $this->call(FlightSeeder::class);
       $this->call(BookingSeeder::class);
       $this->call(DocumentationSeeder::class);
       $this->call(TripSeeder::class);
    }
}
