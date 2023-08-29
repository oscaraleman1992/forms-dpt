<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_sitio');
            $table->string('capa_de_red');
            $table->string('tecnico');
            $table->string('coordinado_con_instalaciones');
            $table->string('tecnico_accede_al_sitio');
            $table->string('tecnico_valida_direccion');
            $table->string('direccionamiento');
            $table->string('if_en_ticket');
            $table->string('tecnico_ubica_sala_de_equipos');
            $table->string('tecnico_instala_rack');
            $table->string('equipamiento_cumple_con_if');
            $table->string('usuario_final');
            $table->string('servicio_cumple_con_bw');
            $table->string('servicio_cumple_con_bw_de_download');
            $table->string('usuario_valida_servicio_operativo');
            $table->string('usuario_firma_remito');
            $table->string('actualizacion_del_estado_del_dispositivo');
            $table->string('migracion_abortada');
            $table->string('se_realizo_rollback');
            $table->boolean('pruebas_cargadas_capturas_paronamicas')->nullable();
            $table->boolean('pruebas_cargadas_captura_rack')->nullable();
            $table->boolean('pruebas_cargadas_captura_electronica')->nullable();
            $table->boolean('pruebas_cargadas_captura_de_conexionado_CPE_y_router')->nullable();
            $table->boolean('pruebas_cargadas_captura_de_conexionado_router_y_LAN_LANes')->nullable();
            $table->boolean('pruebas_cargadas_captura_de_diagrama')->nullable();
            $table->boolean('pruebas_cargadas_captura_de_medicion_speedtest_net')->nullable();
            $table->boolean('pruebas_cargadas_captura_de_medicion_speedtest_gba')->nullable();
            $table->boolean('pruebas_cargadas_capturas_de_medicion_inventario')->nullable();
            $table->boolean('pruebas_cargadas_capturas_de_ingreso')->nullable();
            $table->boolean('pruebas_cargadas_captura_de_remito_firmado')->nullable();
            $table->string('archivo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('formularios');
    }
}
