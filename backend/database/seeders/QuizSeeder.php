<?php 
namespace Database\Seeders; 
use App\Models\Quiz; 
use App\Models\Usuario; 
use Illuminate\Database\Seeder; 
class QuizSeeder extends Seeder 
{ 
/** 
* Run the database seeds. 
*/ 
public function run(): void 
{ 
$psicopedagoga = Usuario::where('perfil', 'psicopedagoga')
>first(); 
Quiz::create([ 
'titulo' => 'Triagem Inicial de Aprendizagem', 
'descricao' => 'Questionário inicial para identificar 
dificuldades, perfil de aprendizagem e sinais de atenção pedagógica.', 
'tipo' => 'triagem_inicial', 
'criado_por' => $psicopedagoga?->id, 
'ativo' => true, 
]); 
} 
} 