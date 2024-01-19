<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tickets')->insert([
            [
                'date' => now(),
                'price' => 25.99,
                'train_id' => 1, // Asigna el ID del tren correspondiente
                'ticket_type_id' => 1, // Asigna el ID del tipo de billete correspondiente
            ],
            [
                'date' => now(),
                'price' => 30.50,
                'train_id' => 2,
                'ticket_type_id' => 2,
            ],
            // Puedes añadir más tickets según sea necesario
        ]);
    }
}
