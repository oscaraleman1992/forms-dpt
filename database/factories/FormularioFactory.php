<?php

namespace Database\Factories;

use App\Models\Formulario;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormularioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formulario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_sitio' => $this->faker->word,
        'capa_de_red' => $this->faker->word,
        'tecnico' => $this->faker->word,
        'coordinado_con_instalaciones' => $this->faker->word,
        'tecnico_accede_al_sitio' => $this->faker->word,
        'tecnico_valida_direccion' => $this->faker->word,
        'direccionamiento' => $this->faker->word,
        'if_en_ticket' => $this->faker->word,
        'tecnico_ubica_sala_de_equipos' => $this->faker->word,
        'tecnico_instala_rack' => $this->faker->word,
        'equipamiento_cumple_con_if' => $this->faker->word,
        'usuario_final' => $this->faker->word,
        'servicio_cumple_con_bw' => $this->faker->word,
        'servicio_cumple_con_bw_de_download' => $this->faker->word,
        'usuario_valida_servicio_operativo' => $this->faker->word,
        'usuario_firma_remito' => $this->faker->word,
        'actualizacion_del_estado_del_dispositivo' => $this->faker->word,
        'migracion_abortada' => $this->faker->word,
        'se_realizo_rollback' => $this->faker->word,
        'pruebas_cargadas' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
