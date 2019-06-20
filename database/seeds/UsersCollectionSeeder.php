<?php

use Illuminate\Database\Seeder;

class UsersCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 7)->create();
        factory(App\User::class)->create([
            'name' => 'gustavo',
            'rol' => 'admin',
            'email' => 'tux@gmail.com',
            'password' => Hash::make('tecsup100'), // password
        
        ]);
        factory(App\User::class)->create([
            'name' => 'edgardo',
            'rol' => 'admin',
            'email' => 'emm@gmail.com',
            'password' => Hash::make('tecsup100'), // password
        
        ]);
        factory(App\User::class)->create([
            'name' => 'eddy',
            'rol' => 'admin',
            'email' => 'eddyarenas@gmail.com',
            'password' => Hash::make('tecsup100'), // password
        
        ]);
        factory(App\User::class)->create([
            'name' => 'jean',
            'rol' => 'admin',
            'email' => 'jeandelgado@gmail.com',
            'password' => Hash::make('tecsup100'), // password
        
        ]);
        factory(App\User::class)->create([
            'name' => 'shamir',
            'rol' => 'admin',
            'email' => 'shamir@gmail.com',
            'password' => Hash::make('tecsup100'), // password
        
        ]);
        factory(App\User::class)->create([
            'name' => 'brandon',
            'rol' => 'admin',
            'email' => 'brandon@gmail.com',
            'password' => Hash::make('tecsup100'), // password
        
        ]);
    }
}
