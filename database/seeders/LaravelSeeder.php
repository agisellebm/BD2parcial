<?php

namespace Database\Seeders;
use App\Models\Componentes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LaravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Componentes::create([
            'codigo' => 'codigo.',
            'descripcion' => 'segundo codigo.',
            'cantidad' => '1.00',
            'precio' => '1.99',
        ]);
    }
}
