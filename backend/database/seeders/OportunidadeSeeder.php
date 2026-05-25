<?php 
namespace Database\Seeders; 
use App\Models\Oportunidade; 
use Illuminate\Database\Seeder; 
class OportunidadeSeeder extends Seeder 
{ 
/** 
* Run the database seeds. 
*/ 
public function run(): void 
{ 
Oportunidade::create([ 
'titulo' => 'OBMEP 2026', 
'descricao' => 'Olimpíada Brasileira de Matemática das 
Escolas Públicas.', 
'categoria' => 'olimpiada', 
'data_inicio' => '2026-05-10', 
'data_fim' => '2026-06-10', 
'orientacao' => 'Procure seu professor de Matemática para 
participar e acompanhar o cronograma da escola.', 
'ativo' => true, 
]); 
Oportunidade::create([ 
'titulo' => 'OBA 2026', 
'descricao' => 'Olimpíada Brasileira de Astronomia e 
Astronáutica.', 
'categoria' => 'olimpiada', 
'data_inicio' => '2026-05-15', 
'data_fim' => '2026-06-20', 
'orientacao' => 'Fique atento aos avisos da escola e 
converse com o professor responsável pela área.', 
'ativo' => true, 
]); 
Oportunidade::create([ 
'titulo' => 'Simulado Preparatório ENEM', 
'descricao' => 'Atividade interna para reforçar o preparo 
dos estudantes em áreas estratégicas.', 
'categoria' => 'competicao', 
'data_inicio' => '2026-07-01', 
'data_fim' => '2026-07-15', 
'orientacao' => 'Acompanhe a programação da escola e 
participe das revisões preparatórias.', 
'ativo' => true, 
]); 
Oportunidade::create([ 
'titulo' => 'Semana de Oportunidades Acadêmicas', 
'descricao' => 'Avisos sobre competições, olimpíadas e 
atividades acadêmicas para alunos do ensino médio.', 
'categoria' => 'aviso', 
'data_inicio' => '2026-08-01', 
'data_fim' => '2026-08-07', 
'orientacao' => 'Confira diariamente a área de 
oportunidades da plataforma.', 
'ativo' => true, 
]); 
} 
} 