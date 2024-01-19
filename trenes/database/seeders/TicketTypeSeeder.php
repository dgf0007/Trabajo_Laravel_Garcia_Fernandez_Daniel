<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('ticket_types')->insert([
            [
                'type' => 'Billete sencillo',
            ],
            [
                'type' => 'Abono mensual',
            ],
            [
                'type' => 'Abono trimestral',
            ],
            // Puedes añadir más tipos según sea necesario
        ]);
    }
}
