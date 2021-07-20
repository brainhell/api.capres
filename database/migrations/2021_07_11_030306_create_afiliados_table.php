<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 100)->nullable();
            $table->integer('cedula');
            $table->string('correo', 50)->nullable();
            $table->string('unidad', 250)->nullable();
            $table->string('telf_oficina', 45)->nullable();
            $table->string('telf_habitacion', 45)->nullable();
            $table->string('region', 150)->default('Capital')->nullable();
            $table->string('cargo', 100)->nullable()->default('');
            $table->string('grado', 100)->nullable()->default('');
            $table->string('sueldo', 45)->nullable()->default('');
            $table->string('banco', 250)->nullable()->default('');
            $table->string('cuenta', 20)->nullable()->default('');
            $table->string('porcentaje', 45)->nullable()->default(5);
            $table->tinyInteger('procesado')->nullable()->default(0);
            $table->timestamp('fecha')->useCurrent();
            $table->tinyInteger('capres_procesado')->nullable()->default(0);
            $table->string('capres_user', 45)->nullable()->default('');
            $table->dateTime('capres_fecha')->nullable()->default(Now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
}
