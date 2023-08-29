<!-- Id Sitio Field -->
<div class="col-sm-12">
    <?php echo Form::label('id_sitio', 'Id Sitio:'); ?>

    <p><?php echo e($formulario->id_sitio); ?></p>
</div>

<!-- Capa De Red Field -->
<div class="col-sm-12">
    <?php echo Form::label('capa_de_red', 'Capa De Red:'); ?>

    <p><?php echo e($formulario->capa_de_red); ?></p>
</div>

<!-- Tecnico Field -->
<div class="col-sm-12">
    <?php echo Form::label('tecnico', 'Tecnico:'); ?>

    <p><?php echo e($formulario->tecnico); ?></p>
</div>

<!-- Coordinado Con Instalaciones Field -->
<div class="col-sm-12">
    <?php echo Form::label('coordinado_con_instalaciones', 'Coordinado Con Instalaciones:'); ?>

    <p><?php echo e($formulario->coordinado_con_instalaciones); ?></p>
</div>

<!-- Tecnico Accede Al Sitio Field -->
<div class="col-sm-12">
    <?php echo Form::label('tecnico_accede_al_sitio', 'Tecnico Accede Al Sitio:'); ?>

    <p><?php echo e($formulario->tecnico_accede_al_sitio); ?></p>
</div>

<!-- Tecnico Valida Direccion Field -->
<div class="col-sm-12">
    <?php echo Form::label('tecnico_valida_direccion', 'Tecnico Valida Direccion:'); ?>

    <p><?php echo e($formulario->tecnico_valida_direccion); ?></p>
</div>

<!-- Direccionamiento Field -->
<div class="col-sm-12">
    <?php echo Form::label('direccionamiento', 'Direccionamiento:'); ?>

    <p><?php echo e($formulario->direccionamiento); ?></p>
</div>

<!-- If En Ticket Field -->
<div class="col-sm-12">
    <?php echo Form::label('if_en_ticket', 'If En Ticket:'); ?>

    <p><?php echo e($formulario->if_en_ticket); ?></p>
</div>

<!-- Tecnico Ubica Sala De Equipos Field -->
<div class="col-sm-12">
    <?php echo Form::label('tecnico_ubica_sala_de_equipos', 'Tecnico Ubica Sala De Equipos:'); ?>

    <p><?php echo e($formulario->tecnico_ubica_sala_de_equipos); ?></p>
</div>

<!-- Tecnico Instala Rack Field -->
<div class="col-sm-12">
    <?php echo Form::label('tecnico_instala_rack', 'Tecnico Instala Rack:'); ?>

    <p><?php echo e($formulario->tecnico_instala_rack); ?></p>
</div>

<!-- Equipamiento Cumple Con If Field -->
<div class="col-sm-12">
    <?php echo Form::label('equipamiento_cumple_con_if', 'Equipamiento Cumple Con If:'); ?>

    <p><?php echo e($formulario->equipamiento_cumple_con_if); ?></p>
</div>

<!-- Usuario Final Field -->
<div class="col-sm-12">
    <?php echo Form::label('usuario_final', 'Usuario Final:'); ?>

    <p><?php echo e($formulario->usuario_final); ?></p>
</div>

<!-- Servicio Cumple Con Bw Field -->
<div class="col-sm-12">
    <?php echo Form::label('servicio_cumple_con_bw', 'Servicio Cumple Con Bw:'); ?>

    <p><?php echo e($formulario->servicio_cumple_con_bw); ?></p>
</div>

<!-- Servicio Cumple Con Bw De Download Field -->
<div class="col-sm-12">
    <?php echo Form::label('servicio_cumple_con_bw_de_download', 'Servicio Cumple Con Bw De Download:'); ?>

    <p><?php echo e($formulario->servicio_cumple_con_bw_de_download); ?></p>
</div>

<!-- Usuario Valida Servicio Operativo Field -->
<div class="col-sm-12">
    <?php echo Form::label('usuario_valida_servicio_operativo', 'Usuario Valida Servicio Operativo:'); ?>

    <p><?php echo e($formulario->usuario_valida_servicio_operativo); ?></p>
</div>

<!-- Usuario Firma Remito Field -->
<div class="col-sm-12">
    <?php echo Form::label('usuario_firma_remito', 'Usuario Firma Remito:'); ?>

    <p><?php echo e($formulario->usuario_firma_remito); ?></p>
</div>

<!-- Actualizacion Del Estado Del Dispositivo Field -->
<div class="col-sm-12">
    <?php echo Form::label('actualizacion_del_estado_del_dispositivo', 'Actualizacion Del Estado Del Dispositivo:'); ?>

    <p><?php echo e($formulario->actualizacion_del_estado_del_dispositivo); ?></p>
</div>

<!-- Migracion Abortada Field -->
<div class="col-sm-12">
    <?php echo Form::label('migracion_abortada', 'Migracion Abortada:'); ?>

    <p><?php echo e($formulario->migracion_abortada); ?></p>
</div>

<!-- Se Realizo Rollback Field -->
<div class="col-sm-12">
    <?php echo Form::label('se_realizo_rollback', 'Se Realizo Rollback:'); ?>

    <p><?php echo e($formulario->se_realizo_rollback); ?></p>
    
</div>

<!-- Pruebas Cargadas Field -->
<div class="col-sm-12">
    <?php echo Form::label('pruebas_cargadas', 'Pruebas Cargadas:'); ?>

    <p> <?php if($formulario->pruebas_cargadas_capturas_paronamicas): ?>pruebas_cargadas_capturas_paronamicas <?php endif; ?></p>
    <p> <?php if($formulario->pruebas_cargadas_captura_rack): ?> pruebas_cargadas_captura_rack <?php endif; ?> </p>
    <p> <?php if($formulario->pruebas_cargadas_captura_electronica): ?> pruebas_cargadas_captura_electronica <?php endif; ?></p>
    <p> <?php if($formulario->pruebas_cargadas_captura_de_conexionado_CPE_y_router): ?> pruebas_cargadas_captura_de_conexionado_CPE_y_router <?php endif; ?> </p>
    <p> <?php if($formulario->pruebas_cargadas_captura_de_conexionado_router_y_LAN_LANes): ?> pruebas_cargadas_captura_de_conexionado_router_y_LAN_LANes <?php endif; ?></p>
    <p> <?php if($formulario->pruebas_cargadas_captura_de_diagrama): ?> pruebas_cargadas_captura_de_diagrama <?php endif; ?></p>
    <p> <?php if($formulario->pruebas_cargadas_captura_de_medicion_speedtest_net): ?>pruebas_cargadas_captura_de_medicion_speedtest_net <?php endif; ?></p>
    <p> <?php if($formulario->pruebas_cargadas_captura_de_medicion_speedtest_gba): ?>pruebas_cargadas_captura_de_medicion_speedtest_gba <?php endif; ?></p>
    <p> <?php if($formulario->pruebas_cargadas_capturas_de_medicion_inventario): ?> pruebas_cargadas_capturas_de_medicion_inventario <?php endif; ?></p>
    <p> <?php if($formulario->pruebas_cargadas_capturas_de_ingreso): ?> pruebas_cargadas_capturas_de_ingreso <?php endif; ?></p>
    <p> <?php if($formulario->pruebas_cargadas_captura_de_remito_firmado): ?> pruebas_cargadas_captura_de_remito_firmado <?php endif; ?></p>
</div>

<div class="m-4">
     <p><?php echo e($formulario->archivo); ?> </p>
  
 
</div>
<!-- Created At Field -->
<div class="col-sm-12">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo e($formulario->created_at); ?></p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo e($formulario->updated_at); ?></p>
</div>

<?php /**PATH C:\Users\Usuario\Desktop\dpt\adminlte-generator\resources\views/formularios/show_fields.blade.php ENDPATH**/ ?>