<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
return new class extends Migration 
{ 
public function up(): void 
{ 
Schema::create('recomendacoes_trilha', function (Blueprint 
$table) { 
$table->id(); 
$table->foreignId('usuario_id')->constrained('usuarios')
>cascadeOnDelete(); 
$table->foreignId('resultado_triagem_id')
>constrained('resultados_triagem')->cascadeOnDelete(); 
$table->foreignId('trilha_id')->constrained('trilhas')
>cascadeOnDelete(); 
$table->enum('origem', ['automatica', 'manual'])
->default('automatica'); 
$table->enum('status', ['recomendada', 'iniciada', 
'concluida'])->default('recomendada'); 
$table->timestamps(); 
}); 
} 
public function down(): void 
{ 
Schema::dropIfExists('recomendacoes_trilha'); 
} 
}; 
