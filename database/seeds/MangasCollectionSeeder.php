<?php

use Illuminate\Database\Seeder;

class MangasCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Manga::class, 7)->create();
    }
}
