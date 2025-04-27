<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientInProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Fetch all clients and programs
        $client = Client::all();
        $programs = Program::all();

        // Assign each learner to a random number of programs
        foreach ($client as $client) {
            // Randomly select a subset of programs for each learner
            $programsToAssign = $programs->random(rand(1, $programs->count()));

            // Attach the learner to the selected programs
            foreach ($programsToAssign as $program) {
                $client->program()->attach($program->id);
            }
        }
    }
}
