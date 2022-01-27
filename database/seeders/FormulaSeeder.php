<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormulaSeeder extends Seeder
{
    public function run()
    {
        DB::table('formulas')->insert([
            [
                'name' => 'Massages assis',
                'price' => 100,
                'valid' => '6 semaines',
            ],

            [
                'name' => 'Massages sur table',
                'price' => 450,
                'valid' => '6 semaines',
            ],
            [
                'name' => 'Soin traditionnel : Gua-Sha',
                'price' => 300,
                'valid' => '6 semaines',
            ],
            [
                'name' => 'Kinésiologie',
                'price' => 100,
                'valid' => '6 semaines',
            ],

        ]);
    }
}
