<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class Oportunidade extends Model 
{ 
use HasFactory; 
protected $table = 'oportunidades'; 
protected $fillable = [ 
'titulo', 
'descricao', 
'categoria', 
'data_inicio', 
'data_fim', 
'orientacao', 
'ativo', 
]; 
}