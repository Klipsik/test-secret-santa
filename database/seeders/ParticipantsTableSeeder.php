<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participant;

class ParticipantsTableSeeder extends Seeder
{
    public function run()
    {
        // Use factory
        $participants = Participant::factory()->count(10)->create();

        $participants = $participants->shuffle();

        $count = $participants->count();
        for ($i = 0; $i < $count; $i++) {
            $currentParticipant = $participants[$i];

            $santa = $participants->where('id', '!=', $currentParticipant->id)
                ->where('id', '!=', $participants[($i + 1) % $count]->id)
                ->random();

            $currentParticipant->santa_id = $santa->id;
            $currentParticipant->recipient_id = $participants[($i + 1) % $count]->id;
            $currentParticipant->save();
        }
    }
}
