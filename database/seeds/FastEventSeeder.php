<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FastEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fast_events')->insert([
            [
                'title' => 'Teste 1',
                'start' => '20:00',
                'end' => '20:30',
                'color' => '#19d37c'
            ],
            [
                'title' => 'Teste 2',
                'start' => '18:30',
                'end' => '20:00',
                'color' => '#1979d3'
            ],

        ]);
    }
}
