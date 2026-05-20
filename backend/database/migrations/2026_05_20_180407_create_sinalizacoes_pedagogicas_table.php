<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
return new class extends Migration 
{ 
public function up(): void 
{ 
Schema::create('sinalizacoes_pedagogicas', function (Blueprint 
$table) { 
$table->id(); 
$table->foreignId('usuario_id')->constrained('usuarios')
>cascadeOnDelete(); 
$table->foreignId('resultado_triagem_id')
>constrained('resultados_triagem')->cascadeOnDelete(); 
$table->enum('nivel_atencao', ['baixo', 'moderado', 
'alto'])->default('baixo'); 
$table->string('motivo'); 
$table->enum('origem', ['triagem', 
'analise_psicopedagogica'])->default('triagem'); 
$table->enum('status', ['novo', 'em_acompanhamento', 
'finalizado'])->default('novo'); 
$table->timestamps(); 
}); 
} 
public function down(): void 
{ 
Schema::dropIfExists('sinalizacoes_pedagogicas'); 
} 
};