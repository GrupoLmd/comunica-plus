<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
return new class extends Migration 
{ 
public function up(): void 
{ 
Schema::create('respostas', function (Blueprint $table) { 
$table->id(); 
$table->foreignId('usuario_id')->constrained('usuarios')
>cascadeOnDelete(); 
$table->foreignId('quiz_id')->constrained('quizzes')
>cascadeOnDelete(); 
$table->foreignId('pergunta_id')
>constrained('perguntas')->cascadeOnDelete(); 
$table->text('resposta_texto')->nullable(); 
$table->integer('peso')->default(0); 
$table->timestamps(); 
}); 
} 
public function down(): void 
{ 
Schema::dropIfExists('respostas'); 
} 
}; 