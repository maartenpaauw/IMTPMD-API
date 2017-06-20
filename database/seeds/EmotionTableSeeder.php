<?php

use Illuminate\Database\Seeder;
use IMTPMD\Models\Emotion;

class EmotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emotions = [
            [
                'name' => 'Blij',
                'slug' => str_slug('Blij'),
            ],
            [
                'name' => 'Neutraal',
                'slug' => str_slug('Neutraal'),
            ],
            [
                'name' => 'Verdrietig',
                'slug' => str_slug('Verdrietig'),
            ],
        ];

        foreach ($emotions as $emotion) {
            Emotion::create($emotion);
        }
    }
}
