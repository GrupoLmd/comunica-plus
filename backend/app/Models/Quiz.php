<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class Quiz extends Model 
{ 
use HasFactory; 
protected $table = 'quizzes'; 
protected $fillable = [ 
'titulo', 
'descricao', 
'tipo', 
'criado_por', 
'ativo', 
]; 
public function perguntas() 
{ 
return $this->hasMany(Pergunta::class, 'quiz_id'); 
} 
public function respostas() 
{ 
return $this->hasMany(Resposta::class, 'quiz_id'); 
} 
public function resultadosTriagem() 
{ 
return $this->hasMany(ResultadoTriagem::class, 'quiz_id'); 
} 
public function criador() 
{ 
return $this->belongsTo(Usuario::class, 'criado_por'); 
} 
} 