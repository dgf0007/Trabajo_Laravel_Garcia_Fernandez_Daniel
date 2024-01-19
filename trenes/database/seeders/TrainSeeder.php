<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('trains')->insert([
            [
                'name' => 'Tren A',
                'passengers' => 100,
                'years' => 2022,
                'train_types_id' => 1, // Asigna el ID del tipo de tren correspondiente
            ],
            [
                'name' => 'Tren B',
                'passengers' => 150,
                'years' => 2023,
                'train_types_id' => 2,
            ],
            // Puedes añadir más trenes según sea necesario
        ]);
    }
}
