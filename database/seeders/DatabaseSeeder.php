<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\Fornecedor::factory(5)->hasProdutos(10)->create();
        \App\Models\User::factory(5)->hasPets(10)->create();
        \App\Models\Solicitacao::factory(5)->create();
    }
}
