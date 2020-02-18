<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'title' => 'Reunião',
                'start' => '2020-02-11 20:00',
                'end' => '2020-02-12 20:00',
                'color' => '#19d37c',
                'description' => 'Reunião com cliente'
            ],
            [
                'title' => 'Ligar para cliente',
                'start' => '2020-02-15',
                'end' => '2020-02-16',
                'color' => '#1979d3',
                'description' => 'Falar com o cliente'
            ],

        ]);
    }
}
