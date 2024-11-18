<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'nama_kegiatan' => 'Event 1',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit urna sed vulputate pulvinar. Nullam mollis risus arcu, vitae aliquet tortor pulvinar nec. Nulla vitae enim auctor, finibus metus nec, tincidunt mi. Donec velit eros, congue faucibus nisi quis, feugiat maximus nulla. Nulla facilisis, diam vitae posuere mollis, dolor nisi vestibulum urna, eu lobortis nisi libero non ante. Vestibulum dignissim diam in sodales posuere. Nunc vehicula nisi nec mollis porta. Integer pulvinar ex congue, hendrerit tellus sit amet, tristique elit.',
                'tanggal' => '2024-11-20',
                'waktu' => '10:00',
                'lokasi' => 'Aula A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Event 2',
                'deskripsi' => 'Donec finibus erat id sollicitudin vulputate. Cras blandit dui ligula, a euismod eros pharetra malesuada. Duis malesuada consectetur justo quis laoreet. Etiam porttitor congue ipsum eget ornare. Etiam a dui vel lacus iaculis finibus in varius tellus. Donec vel velit elit. Mauris a dignissim urna, non posuere nisi. Donec id tellus convallis, maximus diam eu, hendrerit magna. Donec facilisis eleifend elit vitae sodales. Nulla tincidunt ante sit amet massa ultricies, faucibus maximus sem placerat.',
                'tanggal' => '2024-11-21',
                'waktu' => '10:00',
                'lokasi' => 'Aula B',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
