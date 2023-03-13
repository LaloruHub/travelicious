<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Visitado;

class VisitadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $visitado = new Visitado();
        $visitado->NOM = '';
        $visitado->WEB = '';
        $visitado->HOT_APAR = '';
        $visitado->FEC = '';
        $visitado->IMG = '';
        $visitado->save();
    }
}
