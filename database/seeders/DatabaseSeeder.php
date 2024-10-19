<?php

namespace Database\Seeders;


use App\Models\patient;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    protected$model=patient::class;
    public function run(): void
    {
        // User::factory(10)->create();

        patient::factory()->create([
            'Fname'=>'john',
            'Lname'=>'barbesa',
            'birth_date'=>'2002-10-16',
            'gender'=>'Male',
            'contact_no'=>99333,
            'addressed'=>'Purok 5 Gingoog City',
        ]);
    }
}
