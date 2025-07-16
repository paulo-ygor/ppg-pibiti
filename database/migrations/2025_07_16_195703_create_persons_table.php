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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->unique();
            $table->string('cpf', 11)->nullable()->unique();
            $table->string('email', 191)->unique();//a pessoa pode ter mais de um e-mail?
            $table->string('telefone', 20)->nullable();
            $table->string('address', 191);
            $table->string('city', 50);
            $table->string('country', 50);
            $table->string('url_lattes')->nullable();
            $table->string('orcid')->nullable();
            $table->string('abreviation');//gerar automaticamente a partir do nome no formulário
            $table->string('nationality', 191)->nullable();//código de país da base de dados
            $table->string('passport', 50)->nullable();//apenas para estrangeiro
            $table->string('cep', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
