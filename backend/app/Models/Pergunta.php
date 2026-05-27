<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class Pergunta extends Model 
{ 
use HasFactory; 
protected $table = 'perguntas'; 
protected $fillable = [ 
'quiz_id', 
'enunciado', 
'tipo_resposta', 
'categoria', 
'ordem', 
'ativo', 
]; 
public function quiz() 
{ 
return $this->belongsTo(Quiz::class, 'quiz_id'); 
} 
public function respostas() 
{ 
return $this->hasMany(Resposta::class, 'pergunta_id'); 
} 
} 