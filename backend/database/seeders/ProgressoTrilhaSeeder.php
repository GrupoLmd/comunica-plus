<?php 
namespace Database\Seeders; 
use App\Models\Usuario; 
use App\Models\Trilha; 
use App\Models\ProgressoTrilha; 
use Illuminate\Database\Seeder; 
class ProgressoTrilhaSeeder extends Seeder 
{ 
/** 
* Run the database seeds. 
*/ 
public function run(): void 
{ 
$dados = [ 
[ 
'email' => 'ana@comunicaplus.com', 
'disciplina' => 'matematica', 
'percentual' => 40, 
'concluida' => false, 
'ultima_atividade' => 'Quiz introdutório de frações', 
], 
[ 
'email' => 'carlos@comunicaplus.com', 
'disciplina' => 'portugues', 
'percentual' => 70, 
'concluida' => false, 
                'ultima_atividade' => 'Interpretação de texto guiada', 
            ], 
            [ 
                'email' => 'mariana@comunicaplus.com', 
                'disciplina' => 'redacao', 
                'percentual' => 100, 
                'concluida' => true, 
                'ultima_atividade' => 'Conclusão da trilha de 
argumentação', 
            ], 
            [ 
                'email' => 'joao@comunicaplus.com', 
                'disciplina' => 'matematica', 
                'percentual' => 20, 
                'concluida' => false, 
                'ultima_atividade' => 'Desafio rápido de lógica', 
            ], 
            [ 
                'email' => 'larissa@comunicaplus.com', 
                'disciplina' => 'ciencias', 
                'percentual' => 55, 
                'concluida' => false, 
                'ultima_atividade' => 'Atividade prática sobre 
ecossistemas', 
            ], 
        ]; 
 
        foreach ($dados as $item) { 
            $usuario = Usuario::where('email', $item['email'])
>first(); 
            $trilha = Trilha::where('disciplina', 
$item['disciplina'])->first(); 
 
            if (!$usuario || !$trilha) { 
                continue; 
            } 
 
            ProgressoTrilha::create([ 
                'usuario_id' => $usuario->id, 
                'trilha_id' => $trilha->id, 
                'percentual' => $item['percentual'], 
                'concluida' => $item['concluida'], 
                'ultima_atividade' => $item['ultima_atividade'], 
            ]); 
        } 
    } 
} 