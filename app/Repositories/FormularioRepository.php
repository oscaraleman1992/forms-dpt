<?php

namespace App\Repositories;

use App\Models\Formulario;
use App\Repositories\BaseRepository;

/**
 * Class FormularioRepository
 * @package App\Repositories
 * @version August 10, 2023, 4:03 am UTC
*/

class FormularioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'pruebas_cargadas'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Formulario::class;
    }
}
