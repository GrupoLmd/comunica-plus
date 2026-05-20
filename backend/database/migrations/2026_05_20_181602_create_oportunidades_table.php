<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
return new class extends Migration 
{ 
public function up(): void 
{ 
Schema::create('oportunidades', function (Blueprint $table) { 
$table->id(); 
$table->string('titulo'); 
$table->text('descricao')->nullable(); 
$table->enum('categoria', ['olimpiada', 'competicao', 
'aviso'])->default('aviso'); 
$table->date('data_inicio')->nullable(); 
$table->date('data_fim')->nullable(); 
$table->text('orientacao')->nullable(); 
$table->boolean('ativo')->default(true); 
$table->timestamps(); 
}); 
} 
public function down(): void 
{ 
Schema::dropIfExists('oportunidades'); 
} 
};