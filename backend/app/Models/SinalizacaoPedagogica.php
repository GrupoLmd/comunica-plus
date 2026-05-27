<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class SinalizacaoPedagogica extends Model 
{ 
use HasFactory; 
protected $table = 'sinalizacoes_pedagogicas'; 
protected $fillable = [ 
'usuario_id', 
'resultado_triagem_id', 
'nivel_atencao', 
'motivo', 
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
} 