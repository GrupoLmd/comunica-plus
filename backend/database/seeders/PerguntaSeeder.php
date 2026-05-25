<?php 
namespace Database\Seeders; 
use App\Models\Pergunta; 
use App\Models\Quiz; 
use Illuminate\Database\Seeder; 
class PerguntaSeeder extends Seeder 
{ 
/** 
* Run the database seeds. 
*/ 
    public function run(): void 
    { 
        $quiz = Quiz::where('tipo', 'triagem_inicial')->first(); 
 
        if (!$quiz) { 
            return; 
        } 
 
        Pergunta::create([ 
            'quiz_id' => $quiz->id, 
            'enunciado' => 'Em qual disciplina você sente mais 
dificuldade?', 
            'tipo_resposta' => 'unica_escolha', 
            'categoria' => 'dificuldade_disciplina', 
            'ordem' => 1, 
            'ativo' => true, 
        ]); 
 
        Pergunta::create([ 
            'quiz_id' => $quiz->id, 
            'enunciado' => 'Como você aprende melhor?', 
            'tipo_resposta' => 'unica_escolha', 
            'categoria' => 'perfil_aprendizagem', 
            'ordem' => 2, 
            'ativo' => true, 
        ]); 
 
        Pergunta::create([ 
            'quiz_id' => $quiz->id, 
            'enunciado' => 'Qual é o seu principal objetivo na 
plataforma?', 
            'tipo_resposta' => 'unica_escolha', 
            'categoria' => 'objetivo', 
            'ordem' => 3, 
            'ativo' => true, 
        ]); 
 
        Pergunta::create([ 
            'quiz_id' => $quiz->id, 
            'enunciado' => 'Você sente dificuldade em manter a atenção 
durante explicações longas?', 
            'tipo_resposta' => 'unica_escolha', 
            'categoria' => 'atencao_pedagogica', 
            'ordem' => 4, 
            'ativo' => true, 
        ]); 
 
        Pergunta::create([ 
            'quiz_id' => $quiz->id, 
            'enunciado' => 'Você se sente desmotivado com atividades 
muito repetitivas?', 
            'tipo_resposta' => 'unica_escolha', 
            'categoria' => 'engajamento', 
            'ordem' => 5, 
            'ativo' => true, 
        ]); 
 
        Pergunta::create([ 
            'quiz_id' => $quiz->id, 
            'enunciado' => 'Você sente dificuldade para compreender 
textos muito longos?', 
'tipo_resposta' => 'unica_escolha', 
'categoria' => 'atencao_pedagogica', 
'ordem' => 6, 
'ativo' => true, 
]); 
} 
} 