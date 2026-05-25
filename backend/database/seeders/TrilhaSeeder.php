<?php 
namespace Database\Seeders; 
use App\Models\Trilha; 
use Illuminate\Database\Seeder; 
class TrilhaSeeder extends Seeder 
{ 
/** 
* Run the database seeds. 
*/ 
public function run(): void 
{ 
Trilha::create([ 
'titulo' => 'Matemática Visual', 
'descricao' => 'Trilha com apoio visual, exemplos práticos 
e exercícios guiados para reforço em Matemática.', 
'disciplina' => 'matematica', 
'perfil_indicado' => 'visual', 
'nivel' => 'basico', 
'ativa' => true, 
]); 
Trilha::create([ 
'titulo' => 'Matemática Interativa', 
'descricao' => 'Trilha com desafios curtos, quizzes e 
atividades dinâmicas para reforço em Matemática.', 
'disciplina' => 'matematica', 
'perfil_indicado' => 'interativo', 
'nivel' => 'basico', 
'ativa' => true, 
]); 
Trilha::create([ 
'titulo' => 'Português com Leitura Guiada', 
'descricao' => 'Trilha voltada para interpretação textual, 
leitura orientada e compreensão de conteúdo.', 
'disciplina' => 'portugues', 
'perfil_indicado' => 'leitura', 
'nivel' => 'basico', 
'ativa'=> true,
]); 
Trilha::create([ 
'titulo' => 'Português Prático', 
'descricao' => 'Trilha com atividades aplicadas, escrita 
curta e exercícios objetivos de Língua Portuguesa.', 
'disciplina' => 'portugues', 
'perfil_indicado' => 'pratico', 
'nivel' => 'basico', 
'ativa' => true, 
]); 
Trilha::create([ 
'titulo' => 'Ciências na Prática', 
'descricao' => 'Trilha com abordagem prática e 
contextualizada para reforço em Ciências.', 
'disciplina' => 'ciencias', 
'perfil_indicado' => 'pratico', 
'nivel' => 'basico', 
'ativa' => true, 
]); 
Trilha::create([ 
'titulo' => 'Redação por Etapas', 
'descricao' => 'Trilha com estrutura guiada para 
desenvolver escrita, argumentação e organização textual.', 
'disciplina' => 'redacao', 
'perfil_indicado' => 'interativo', 
'nivel' => 'basico', 
'ativa' => true, 
]); 
} 
}