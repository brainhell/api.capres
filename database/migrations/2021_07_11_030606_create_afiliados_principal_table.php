<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosPrincipalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados_principal', function (Blueprint $table) {
            $table->integer('cedula')->primary();
            $table->string('nombre')->nullable();
            $table->string('telefono', 50)->nullable();
            $table->double('ahorro_socio')->nullable();
            $table->double('ahorro_patrono')->nullable();
            $table->double('aporte_voluntario')->nullable();
            $table->string('cta_bancaria', 50)->nullable();
            $table->date('f_ingreso')->nullable()->default(Now());
            $table->double('monto_retiro')->nullable();
            $table->integer('porcentaje')->nullable();
            $table->double('deuda_prestamo')->nullable();
            $table->date('f_prestamo')->nullable();
            $table->double('monto_prestamo')->nullable();
            $table->date('f_retiro_haberes')->nullable();
            $table->date('f_disp_retiro_haberes')->nullable();
            $table->double('total_haberes')->nullable();
            $table->double('fiadores')->nullable();
            $table->string('ubicacion_administrativa')->nullable();
            $table->double('reserva')->nullable();
            $table->double('ret_cobrar')->nullable();
            $table->char('estatus', 6);
            $table->double('dividendos')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados_principal');
    }
}
