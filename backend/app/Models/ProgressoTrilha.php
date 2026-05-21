<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class ProgressoTrilha extends Model 
{ 
use HasFactory; 
protected $table = 'progresso_trilhas'; 
protected $fillable = [ 
'usuario_id', 
'trilha_id', 
'percentual', 
'concluida', 
'ultima_atividade', 
]; 
public function usuario() 
{ 
return $this->belongsTo(Usuario::class, 'usuario_id'); 
} 
public function trilha() 
{ 
return $this->belongsTo(Trilha::class, 'trilha_id'); 
} 
} 