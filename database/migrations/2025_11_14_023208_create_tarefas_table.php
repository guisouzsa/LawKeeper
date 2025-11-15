<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');             
            $table->date('data_limite');         
            $table->enum('status', ['Pendente', 'Concluída', 'Atrasada']); 
            $table->text('descricao')->nullable(); // Descrição opcional
            $table->timestamps(); 
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};