<?php

use Illuminate\Database\Seeder;

class ProductosCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Producto::class, 7)->create();
    }
}
