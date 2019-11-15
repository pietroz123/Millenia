<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::truncate();

        Marca::create([
            'nome' => 'Loreal',
        ]);
        Marca::create([
            'nome' => 'Kerastase',
        ]);
        Marca::create([
            'nome' => 'Olenka',
        ]);
        Marca::create([
            'nome' => 'Vella',
        ]);
        Marca::create([
            'nome' => 'Aneto',
        ]);

    }
}
