<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
return new class extends Migration 
{ 
public function up(): void 
{ 
Schema::create('progresso_trilhas', function (Blueprint 
$table) { 
$table->id(); 
$table->foreignId('usuario_id')->constrained('usuarios')
>cascadeOnDelete(); 
$table->foreignId('trilha_id')->constrained('trilhas')
>cascadeOnDelete(); 
$table->integer('percentual')->default(0); 
$table->boolean('concluida')->default(false); 
$table->string('ultima_atividade')->nullable(); 
$table->timestamps(); 
}); 
} 
public function down(): void 
{ 
Schema::dropIfExists('progresso_trilhas'); 
} 
}; 