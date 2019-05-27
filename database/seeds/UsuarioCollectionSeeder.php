<?php

use Illuminate\Database\Seeder;

class UsuarioCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Usuario::class, 7)->create();
    }
}
