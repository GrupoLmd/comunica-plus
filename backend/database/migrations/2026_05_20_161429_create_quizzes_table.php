<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
return new class extends Migration 
{ 
/** 
* Run the migrations. 
*/ 
public function up(): void 
{ 
Schema::create('quizzes', function (Blueprint $table) { 
$table->id(); 
$table->string('titulo'); 
$table->text('descricao')->nullable(); 
$table->enum('tipo', ['triagem_inicial', 'psicopedagogico'])
->default('triagem_inicial'); 
$table->unsignedBigInteger('criado_por')->nullable(); 
$table->boolean('ativo')->default(true); 
$table->timestamps(); 
$table->foreign('criado_por') ->references('id') ->on('usuarios') 
->nullOnDelete(); 
}); 
} 
/** 
* Reverse the migrations. 
*/ 
public function down(): void 
{ 
} 
}; 