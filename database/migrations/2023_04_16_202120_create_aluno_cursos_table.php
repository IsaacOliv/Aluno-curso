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
        Schema::create('aluno_cursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_aluno')
                    ->constrained('alunos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('id_curso')
                    ->constrained('cursos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno_cursos');
    }
};
