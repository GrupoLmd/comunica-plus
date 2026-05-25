<?php 
namespace Database\Seeders; 
use App\Models\Quiz; 
use App\Models\Usuario; 
use App\Models\ResultadoTriagem; 
use Illuminate\Database\Seeder; 
class ResultadoTriagemSeeder extends Seeder 
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
$ana = Usuario::where('email', 'ana@comunicaplus.com')
>first(); 
$carlos = Usuario::where('email', 'carlos@comunicaplus.com')
>first(); 
$mariana = Usuario::where('email', 
'mariana@comunicaplus.com')->first(); 
$joao = Usuario::where('email', 'joao@comunicaplus.com')
>first(); 
$larissa = Usuario::where('email', 
'larissa@comunicaplus.com')->first(); 
if ($ana) { 
ResultadoTriagem::create([ 
'usuario_id' => $ana->id, 
'quiz_id' => $quiz->id, 
'dificuldade_principal' => 'matematica', 
'perfil_aprendizagem' => 'visual', 
'objetivo_principal' => 'reforco', 
'nivel_atencao' => 'moderado', 
'recomendacao_texto' => 'Recomenda-se a trilha 
Matemática Visual com foco em reforço por etapas.', 
]); 
} 
if ($carlos) { 
ResultadoTriagem::create([ 
'usuario_id' => $carlos->id, 
'quiz_id' => $quiz->id, 
'dificuldade_principal' => 'portugues', 
'perfil_aprendizagem' => 'leitura', 
'objetivo_principal' => 'prova', 
'nivel_atencao' => 'baixo', 
'recomendacao_texto' => 'Recomenda-se a trilha 
Português com Leitura Guiada para fortalecer interpretação textual.', 

]); 
}
if ($mariana) { 
ResultadoTriagem::create([ 
'usuario_id' => $mariana->id, 
'quiz_id' => $quiz->id, 
'dificuldade_principal' => 'redacao', 
'perfil_aprendizagem' => 'interativo', 
'objetivo_principal' => 'olimpiada', 
'nivel_atencao' => 'baixo', 
'recomendacao_texto' => 'Recomenda-se a trilha Redação 
por Etapas para aprimorar escrita e argumentação.', 
]); 
} 
if ($joao) { 
ResultadoTriagem::create([ 
'usuario_id' => $joao->id, 
'quiz_id' => $quiz->id, 
'dificuldade_principal' => 'matematica', 
'perfil_aprendizagem' => 'interativo', 
'objetivo_principal' => 'revisao', 
'nivel_atencao' => 'alto', 
'recomendacao_texto' => 'Recomenda-se a trilha 
Matemática Interativa com apoio dinâmico e acompanhamento 
pedagógico.', 
]); 
} 
if ($larissa) { 
ResultadoTriagem::create([ 
'usuario_id' => $larissa->id, 
'quiz_id' => $quiz->id, 
'dificuldade_principal' => 'ciencias', 
'perfil_aprendizagem' => 'pratico', 
'objetivo_principal' => 'reforco', 
'nivel_atencao' => 'moderado', 
'recomendacao_texto' => 'Recomenda-se a trilha 
Ciências na Prática com atividades contextualizadas.', 
]); 
} 
} 
}