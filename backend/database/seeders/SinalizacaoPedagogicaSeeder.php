<?php

namespace Database\Seeders;

use App\Models\Usuario;
use App\Models\ResultadoTriagem;
use App\Models\SinalizacaoPedagogica;
use Illuminate\Database\Seeder;

class SinalizacaoPedagogicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $emails = [
            'ana@comunicaplus.com' => [
                'nivel_atencao' => 'moderado',
                'motivo' => 'Dificuldade recorrente em manter atenção durante explicações longas.',
                'status' => 'em_acompanhamento',
            ],
            'joao@comunicaplus.com' => [
                'nivel_atencao' => 'alto',
                'motivo' => 'Baixa adaptação ao formato tradicional e necessidade de apoio pedagógico intensificado.',
                'status' => 'novo',
            ],
            'larissa@comunicaplus.com' => [
                'nivel_atencao' => 'moderado',
                'motivo' => 'Sinais de desmotivação em atividades repetitivas e necessidade de abordagem mais prática.',
                'status' => 'em_acompanhamento',
            ],
        ];

        foreach ($emails as $email => $dados) {
            $usuario = Usuario::where('email', $email)->first();

            if (!$usuario) {
                continue;
            }

            $resultado = ResultadoTriagem::where('usuario_id', $usuario->id)->first();

            if (!$resultado) {
                continue;
            }

            SinalizacaoPedagogica::create([
                'usuario_id' => $usuario->id,
                'resultado_triagem_id' => $resultado->id,
                'nivel_atencao' => $dados['nivel_atencao'],
                'motivo' => $dados['motivo'],
                'origem' => 'triagem',
                'status' => $dados['status'],
            ]);
        }
    }
}