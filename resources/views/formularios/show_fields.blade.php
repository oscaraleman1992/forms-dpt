<!-- Id Sitio Field -->
<div class="col-sm-12">
    {!! Form::label('id_sitio', 'Id Sitio:') !!}
    <p>{{ $formulario->id_sitio }}</p>
</div>

<!-- Capa De Red Field -->
<div class="col-sm-12">
    {!! Form::label('capa_de_red', 'Capa De Red:') !!}
    <p>{{ $formulario->capa_de_red }}</p>
</div>

<!-- Tecnico Field -->
<div class="col-sm-12">
    {!! Form::label('tecnico', 'Tecnico:') !!}
    <p>{{ $formulario->tecnico }}</p>
</div>

<!-- Coordinado Con Instalaciones Field -->
<div class="col-sm-12">
    {!! Form::label('coordinado_con_instalaciones', 'Coordinado Con Instalaciones:') !!}
    <p>{{ $formulario->coordinado_con_instalaciones }}</p>
</div>

<!-- Tecnico Accede Al Sitio Field -->
<div class="col-sm-12">
    {!! Form::label('tecnico_accede_al_sitio', 'Tecnico Accede Al Sitio:') !!}
    <p>{{ $formulario->tecnico_accede_al_sitio }}</p>
</div>

<!-- Tecnico Valida Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('tecnico_valida_direccion', 'Tecnico Valida Direccion:') !!}
    <p>{{ $formulario->tecnico_valida_direccion }}</p>
</div>

<!-- Direccionamiento Field -->
<div class="col-sm-12">
    {!! Form::label('direccionamiento', 'Direccionamiento:') !!}
    <p>{{ $formulario->direccionamiento }}</p>
</div>

<!-- If En Ticket Field -->
<div class="col-sm-12">
    {!! Form::label('if_en_ticket', 'If En Ticket:') !!}
    <p>{{ $formulario->if_en_ticket }}</p>
</div>

<!-- Tecnico Ubica Sala De Equipos Field -->
<div class="col-sm-12">
    {!! Form::label('tecnico_ubica_sala_de_equipos', 'Tecnico Ubica Sala De Equipos:') !!}
    <p>{{ $formulario->tecnico_ubica_sala_de_equipos }}</p>
</div>

<!-- Tecnico Instala Rack Field -->
<div class="col-sm-12">
    {!! Form::label('tecnico_instala_rack', 'Tecnico Instala Rack:') !!}
    <p>{{ $formulario->tecnico_instala_rack }}</p>
</div>

<!-- Equipamiento Cumple Con If Field -->
<div class="col-sm-12">
    {!! Form::label('equipamiento_cumple_con_if', 'Equipamiento Cumple Con If:') !!}
    <p>{{ $formulario->equipamiento_cumple_con_if }}</p>
</div>

<!-- Usuario Final Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_final', 'Usuario Final:') !!}
    <p>{{ $formulario->usuario_final }}</p>
</div>

<!-- Servicio Cumple Con Bw Field -->
<div class="col-sm-12">
    {!! Form::label('servicio_cumple_con_bw', 'Servicio Cumple Con Bw:') !!}
    <p>{{ $formulario->servicio_cumple_con_bw }}</p>
</div>

<!-- Servicio Cumple Con Bw De Download Field -->
<div class="col-sm-12">
    {!! Form::label('servicio_cumple_con_bw_de_download', 'Servicio Cumple Con Bw De Download:') !!}
    <p>{{ $formulario->servicio_cumple_con_bw_de_download }}</p>
</div>

<!-- Usuario Valida Servicio Operativo Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_valida_servicio_operativo', 'Usuario Valida Servicio Operativo:') !!}
    <p>{{ $formulario->usuario_valida_servicio_operativo }}</p>
</div>

<!-- Usuario Firma Remito Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_firma_remito', 'Usuario Firma Remito:') !!}
    <p>{{ $formulario->usuario_firma_remito }}</p>
</div>

<!-- Actualizacion Del Estado Del Dispositivo Field -->
<div class="col-sm-12">
    {!! Form::label('actualizacion_del_estado_del_dispositivo', 'Actualizacion Del Estado Del Dispositivo:') !!}
    <p>{{ $formulario->actualizacion_del_estado_del_dispositivo }}</p>
</div>

<!-- Migracion Abortada Field -->
<div class="col-sm-12">
    {!! Form::label('migracion_abortada', 'Migracion Abortada:') !!}
    <p>{{ $formulario->migracion_abortada }}</p>
</div>

<!-- Se Realizo Rollback Field -->
<div class="col-sm-12">
    {!! Form::label('se_realizo_rollback', 'Se Realizo Rollback:') !!}
    <p>{{ $formulario->se_realizo_rollback }}</p>
    
</div>

<!-- Pruebas Cargadas Field -->
<div class="col-sm-12">
    {!! Form::label('pruebas_cargadas', 'Pruebas Cargadas:') !!}
    <p> @if ($formulario->pruebas_cargadas_capturas_paronamicas)pruebas_cargadas_capturas_paronamicas @endif</p>
    <p> @if ($formulario->pruebas_cargadas_captura_rack) pruebas_cargadas_captura_rack @endif </p>
    <p> @if ($formulario->pruebas_cargadas_captura_electronica) pruebas_cargadas_captura_electronica @endif</p>
    <p> @if ($formulario->pruebas_cargadas_captura_de_conexionado_CPE_y_router) pruebas_cargadas_captura_de_conexionado_CPE_y_router @endif </p>
    <p> @if ($formulario->pruebas_cargadas_captura_de_conexionado_router_y_LAN_LANes) pruebas_cargadas_captura_de_conexionado_router_y_LAN_LANes @endif</p>
    <p> @if ($formulario->pruebas_cargadas_captura_de_diagrama) pruebas_cargadas_captura_de_diagrama @endif</p>
    <p> @if ($formulario->pruebas_cargadas_captura_de_medicion_speedtest_net)pruebas_cargadas_captura_de_medicion_speedtest_net @endif</p>
    <p> @if ($formulario->pruebas_cargadas_captura_de_medicion_speedtest_gba)pruebas_cargadas_captura_de_medicion_speedtest_gba @endif</p>
    <p> @if ($formulario->pruebas_cargadas_capturas_de_medicion_inventario) pruebas_cargadas_capturas_de_medicion_inventario @endif</p>
    <p> @if ($formulario->pruebas_cargadas_capturas_de_ingreso) pruebas_cargadas_capturas_de_ingreso @endif</p>
    <p> @if ($formulario->pruebas_cargadas_captura_de_remito_firmado) pruebas_cargadas_captura_de_remito_firmado @endif</p>
</div>

<div class="m-4">
     <p>{{ $formulario->archivo}} </p>
  
 
</div>
<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $formulario->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $formulario->updated_at }}</p>
</div>

