<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class RecomendacaoTrilha extends Model 
{ 
use HasFactory; 
protected $table = 'recomendacoes_trilha'; 
protected $fillable = [ 
'usuario_id', 
'resultado_triagem_id', 
'trilha_id', 
'origem', 
'status', 
]; 
public function usuario() 
{ 
return $this->belongsTo(Usuario::class, 'usuario_id'); 
} 
public function resultadoTriagem() 
{ 
return $this->belongsTo(ResultadoTriagem::class, 
'resultado_triagem_id'); 
} 
public function trilha() 
{ 
return $this->belongsTo(Trilha::class, 'trilha_id'); 
} 
} 