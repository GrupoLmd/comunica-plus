<?php 
namespace Database\Seeders; 
use App\Models\Usuario; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\Hash; 
class UsuarioSeeder extends Seeder 
{ 
/** 
* Run the database seeds. 
*/ 
public function run(): void 
{ 
Usuario::create([ 
'nome' => 'Gestão Escolar', 
'email' => 'gestao@comunicaplus.com', 
'senha' => Hash::make('123456'), 
'perfil' => 'gestao', 
'escola' => 'CETI Exemplo', 
'turma' => null, 
'serie' => null, 
'status' => 'ativo', 
]); 
Usuario::create([ 
'nome' => 'Psicopedagoga Escolar', 
'email' => 'psico@comunicaplus.com', 
'senha' => Hash::make('123456'), 
'perfil' => 'psicopedagoga', 
'escola' => 'CETI Exemplo', 
'turma' => null, 
'serie' => null, 
'status' => 'ativo', 
]); 
Usuario::create([ 
'nome' => 'Ana Beatriz', 
'email' => 'ana@comunicaplus.com', 
            'senha' => Hash::make('123456'), 
            'perfil' => 'aluno', 
            'escola' => 'CETI Exemplo', 
            'turma' => '1A', 
            'serie' => '1ª Série', 
            'status' => 'ativo', 
        ]); 
 
        Usuario::create([ 
            'nome' => 'Carlos Henrique', 
            'email' => 'carlos@comunicaplus.com', 
            'senha' => Hash::make('123456'), 
            'perfil' => 'aluno', 
            'escola' => 'CETI Exemplo', 
            'turma' => '2B', 
            'serie' => '2ª Série', 
            'status' => 'ativo', 
        ]); 
 
        Usuario::create([ 
            'nome' => 'Mariana Silva', 
            'email' => 'mariana@comunicaplus.com', 
            'senha' => Hash::make('123456'), 
            'perfil' => 'aluno', 
            'escola' => 'CETI Exemplo', 
            'turma' => '3A', 
            'serie' => '3ª Série', 
            'status' => 'ativo', 
        ]); 
 
        Usuario::create([ 
            'nome' => 'João Pedro', 
            'email' => 'joao@comunicaplus.com', 
            'senha' => Hash::make('123456'), 
            'perfil' => 'aluno', 
            'escola' => 'CETI Exemplo', 
            'turma' => '2A', 
            'serie' => '2ª Série', 
            'status' => 'ativo', 
        ]); 
 
        Usuario::create([ 
            'nome' => 'Larissa Mendes', 
            'email' => 'larissa@comunicaplus.com', 
            'senha' => Hash::make('123456'), 
            'perfil' => 'aluno', 
            'escola' => 'CETI Exemplo', 
            'turma' => '1B', 
            'serie' => '1ª Série', 
            'status' => 'ativo', 
        ]); 
    } 
}