<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UsersTableSeeder::class);
        $this->call(CidadesEstadosSeeder::class);
        $this->call(ProfissoesTableSeeder::class);
        $this->call(ServicosTableSeeder::class);
        $this->call(MarcasTableSeeder::class);
        $this->call(ProfissionaisTableSeeder::class);
        $this->call(ProfissionalServicoTableSeeder::class);
        $this->call(ClientesTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
