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
        Schema::create('bebida', function (Blueprint $table) {
            $table->increments('cd_bebida');
            $table->string('nm_bebida');
            $table->text('ds_preparo');
            $table->smallInteger('id_tipo');
            $table->string('ds_imagem')->nullable();
            $table->string('id_externo')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bebida');
    }
};
