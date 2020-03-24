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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'jonatascraveiro@gmail.com',
            'password' => bcrypt('imtimaster'),
            'admin' => true,
        ]);
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'ctigeo@sesau.campogrande.ms.gov.br',
            'password' => bcrypt('larissa123'),
            'admin' => true,
        ]);

    }
}
