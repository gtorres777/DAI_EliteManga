<?php

use Illuminate\Database\Seeder;

class ComprasCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Compra::class)->create([
            'user_id' => 'tux',
        ]);
    }
}
