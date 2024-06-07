<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 50)->nullable(false);
            $table->foreignId('genero_id')->constrained('generos');
            $table->foreignId('produtora_id')->constrained('produtoras');
            $table->text('descricao')->nullable(false);
            $table->decimal('nota', 4, 2)->nullable(false);
            $table->string('capa',40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogos');
    }
}
