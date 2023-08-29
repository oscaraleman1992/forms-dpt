<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Formulario
 * @package App\Models
 * @version August 10, 2023, 4:03 am UTC
 *
 * @property string $id_sitio
 * @property string $capa_de_red
 * @property string $tecnico
 * @property string $coordinado_con_instalaciones
 * @property string $tecnico_accede_al_sitio
 * @property string $tecnico_valida_direccion
 * @property string $direccionamiento
 * @property string $if_en_ticket
 * @property string $tecnico_ubica_sala_de_equipos
 * @property string $tecnico_instala_rack
 * @property string $equipamiento_cumple_con_if
 * @property string $usuario_final
 * @property string $servicio_cumple_con_bw
 * @property  $servicio_cumple_con_bw_de_download
 * @property string $usuario_valida_servicio_operativo
 * @property string $usuario_firma_remito
 * @property string $actualizacion_del_estado_del_dispositivo
 * @property string $migracion_abortada
 * @property string $se_realizo_rollback
 * @property string $pruebas_cargadas
 */
class Formulario extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'formularios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_sitio',
        'capa_de_red',
        'tecnico',
        'coordinado_con_instalaciones',
        'tecnico_accede_al_sitio',
        'tecnico_valida_direccion',
        'direccionamiento',
        'if_en_ticket',
        'tecnico_ubica_sala_de_equipos',
        'tecnico_instala_rack',
        'equipamiento_cumple_con_if',
        'usuario_final',
        'servicio_cumple_con_bw',
        'servicio_cumple_con_bw_de_download',
        'usuario_valida_servicio_operativo',
        'usuario_firma_remito',
        'actualizacion_del_estado_del_dispositivo',
        'migracion_abortada',
        'se_realizo_rollback',
        'pruebas_cargadas_capturas_paronamicas',
        'pruebas_cargadas_captura_rack',
        'pruebas_cargadas_captura_electronica',
        'pruebas_cargadas_captura_de_conexionado_CPE_y_router',
        'pruebas_cargadas_captura_de_conexionado_router_y_LAN_LANes',
        'pruebas_cargadas_captura_de_diagrama',
        'pruebas_cargadas_captura_de_medicion_speedtest_net',
        'pruebas_cargadas_captura_de_medicion_speedtest_gba',
        'pruebas_cargadas_capturas_de_medicion_inventario',
        'pruebas_cargadas_capturas_de_ingreso',
        'pruebas_cargadas_captura_de_remito_firmado',
        'archivo'
    ];
               
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_sitio' => 'string',
        'capa_de_red' => 'string',
        'tecnico' => 'string',
        'coordinado_con_instalaciones' => 'string',
        'tecnico_accede_al_sitio' => 'string',
        'tecnico_valida_direccion' => 'string',
        'direccionamiento' => 'string',
        'if_en_ticket' => 'string',
        'tecnico_ubica_sala_de_equipos' => 'string',
        'tecnico_instala_rack' => 'string',
        'equipamiento_cumple_con_if' => 'string',
        'usuario_final' => 'string',
        'servicio_cumple_con_bw' => 'string',
        'usuario_valida_servicio_operativo' => 'string',
        'usuario_firma_remito' => 'string',
        'actualizacion_del_estado_del_dispositivo' => 'string',
        'migracion_abortada' => 'string',
        'se_realizo_rollback' => 'string',
        'pruebas_cargadas_capturas_paronamicas' => 'boolean',
        'pruebas_cargadas_captura_rack'  => 'boolean',
        'pruebas_cargadas_captura_electronica'  => 'boolean',
        'pruebas_cargadas_captura_de_conexionado_CPE_y_router'  => 'boolean',
        'pruebas_cargadas_captura_de_conexionado_router_y_LAN_LANes'  => 'boolean',
        'pruebas_cargadas_captura_de_diagrama'  => 'boolean',
        'pruebas_cargadas_captura_de_medicion_speedtest_net'  => 'boolean',
        'pruebas_cargadas_captura_de_medicion_speedtest_gba'  => 'boolean',
        'pruebas_cargadas_capturas_de_medicion_inventario'  => 'boolean',
        'pruebas_cargadas_capturas_de_ingreso'  => 'boolean',
        'pruebas_cargadas_captura_de_remito_firmado'  => 'boolean',
        

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_sitio' => 'required',
        'capa_de_red' => 'required',
        'tecnico' => 'required',
        'coordinado_con_instalaciones' => 'required',
        'tecnico_accede_al_sitio' => 'required',
        'tecnico_valida_direccion' => 'required',
        'direccionamiento' => 'required',
        'if_en_ticket' => 'required',
        'tecnico_ubica_sala_de_equipos' => 'required',
        'tecnico_instala_rack' => 'required',
        'equipamiento_cumple_con_if' => 'required',
        'usuario_final' => 'required',
        'servicio_cumple_con_bw' => 'required',
        'servicio_cumple_con_bw_de_download' => 'required',
        'usuario_valida_servicio_operativo' => 'required',
        'usuario_firma_remito' => 'required',
        'actualizacion_del_estado_del_dispositivo' => 'required',
        'migracion_abortada' => 'required',
        'se_realizo_rollback' => 'required',
        
    ];

    
}
