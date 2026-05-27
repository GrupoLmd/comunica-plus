<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class ResultadoTriagem extends Model 
{ 
use HasFactory; 
protected $table = 'resultados_triagem'; 
protected $fillable = [ 
'usuario_id', 
'quiz_id', 
'dificuldade_principal', 
'perfil_aprendizagem', 
'objetivo_principal', 
'nivel_atencao', 
'recomendacao_texto', 
]; 
public function usuario() 
{ 
return $this->belongsTo(Usuario::class, 'usuario_id'); 
} 
public function quiz() 
{ 
return $this->belongsTo(Quiz::class, 'quiz_id'); 
} 
public function recomendacoesTrilha() 
{ 
return $this->hasMany(RecomendacaoTrilha::class, 
'resultado_triagem_id'); 
} 
public function sinalizacoesPedagogicas() 
{ 
return $this->hasMany(SinalizacaoPedagogica::class, 
'resultado_triagem_id'); 
} 
}