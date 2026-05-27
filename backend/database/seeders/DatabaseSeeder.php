<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsuarioSeeder::class,
            QuizSeeder::class,
            PerguntaSeeder::class,
            TrilhaSeeder::class,
            OportunidadeSeeder::class,
            ResultadoTriagemSeeder::class,
            RecomendacaoTrilhaSeeder::class,
            ProgressoTrilhaSeeder::class,
            SinalizacaoPedagogicaSeeder::class,
        ]);
    }
}