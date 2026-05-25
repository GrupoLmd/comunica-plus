<?php 
 
namespace Database\Seeders; 
 
use App\Models\Trilha; 
use App\Models\Usuario; 
use App\Models\ResultadoTriagem; 
use App\Models\RecomendacaoTrilha; 
use Illuminate\Database\Seeder; 
 
class RecomendacaoTrilhaSeeder extends Seeder 
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
                'perfil' => 'visual', 
            ], 
            [ 
                'email' => 'carlos@comunicaplus.com', 
                'disciplina' => 'portugues', 
                'perfil' => 'leitura', 
            ], 
            [ 
                'email' => 'mariana@comunicaplus.com', 
                'disciplina' => 'redacao', 
                'perfil' => 'interativo', 
            ], 
            [ 
                'email' => 'joao@comunicaplus.com', 
                'disciplina' => 'matematica', 
                'perfil' => 'interativo', 
            ], 
            [ 
                'email' => 'larissa@comunicaplus.com', 
                'disciplina' => 'ciencias', 
                'perfil' => 'pratico', 
            ], 
        ]; 
 
        foreach ($dados as $item) { 
            $usuario = Usuario::where('email', $item['email'])
>first(); 
            if (!$usuario) { 
                continue; 
            } 
 
            $resultado = ResultadoTriagem::where('usuario_id', 
$usuario->id)->latest()->first(); 
            if (!$resultado) { 
                continue; 
            } 
 
            $trilha = Trilha::where('disciplina', $item['disciplina']) 
                ->where('perfil_indicado', $item['perfil']) 
                ->first(); 
if (!$trilha) { 
continue; 
} 
RecomendacaoTrilha::create([ 
'usuario_id' => $usuario->id, 
'resultado_triagem_id' => $resultado->id, 
'trilha_id' => $trilha->id, 
'origem' => 'automatica', 
'status' => 'recomendada', 
]); 
} 
} 
} 