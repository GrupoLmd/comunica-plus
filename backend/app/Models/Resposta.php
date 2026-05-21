<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class Resposta extends Model 
{ 
use HasFactory; 
protected $table = 'respostas'; 
protected $fillable = [ 
'usuario_id', 
'quiz_id', 
'pergunta_id', 
'resposta_texto', 
'peso', 
]; 
public function usuario() 
{ 
return $this->belongsTo(Usuario::class, 'usuario_id'); 
} 
public function quiz() 
{ 
return $this->belongsTo(Quiz::class, 'quiz_id'); 
} 
public function pergunta() 
{ 
return $this->belongsTo(Pergunta::class, 'pergunta_id'); 
} 
} 