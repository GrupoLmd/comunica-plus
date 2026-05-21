<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class Trilha extends Model 
{ 
use HasFactory; 
protected $table = 'trilhas'; 
protected $fillable = [ 
'titulo', 
'descricao', 
'disciplina', 
'perfil_indicado', 
'nivel', 
'ativa', 
]; 
public function recomendacoes() 
{ 
return $this->hasMany(RecomendacaoTrilha::class, 'trilha_id'); 
} 
public function progressos() 
{ 
return $this->hasMany(ProgressoTrilha::class, 'trilha_id'); 
} 
} 