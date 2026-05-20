<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
return new class extends Migration 
{ 
public function up(): void 
{ 
Schema::create('resultados_triagem', function (Blueprint 
$table) { 
$table->id(); 
$table->foreignId('usuario_id')->constrained('usuarios')
>cascadeOnDelete(); 
$table->foreignId('quiz_id')->constrained('quizzes')
>cascadeOnDelete(); 
$table->string('dificuldade_principal'); 
$table->string('perfil_aprendizagem'); 
$table->string('objetivo_principal'); 
$table->enum('nivel_atencao', ['baixo', 'moderado', 
'alto'])->default('baixo'); 
$table->text('recomendacao_texto')->nullable(); 
$table->timestamps(); 
}); 
} 
public function down(): void 
{ 
Schema::dropIfExists('resultados_triagem'); 
} 
}; 
