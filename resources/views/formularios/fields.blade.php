

<!-- Idsitio Field -->
<div class="form-group col-sm-6" enctype="multipart/form-data">
    {!! Form::label('id_sitio', 'ID Sitio:') !!}
    {!! Form::text('id_sitio', null, ['class' => 'form-control']) !!}

   
     
    <div class="mt-2">
        {!! Form::label('capa_de_red', 'Capa de red:') !!}
        {!! Form:: radio('capa_de_red','L2',false, ['class'=>'mx-2'] )!!}<label>L2</label>
        {!! Form:: radio('capa_de_red','L3',false, ['class'=>'mx-2'] )!!}<label >L3</label>
        {!! Form:: radio('capa_de_red','L3 + VPN',false ,['class'=>'mx-2'] )!!}<label>L3 + VPN</label>

    <div class="mt-2">
    
         {!! Form::label('tecnico', 'Nombre del tecnico:') !!}
         {!! Form::text('tecnico', null, ['class' => 'form-control']) !!}
        
    </div>
        <div class="mt-2">
            {!! Form::label('coordinado_con_instalaciones', 'Coordinado Con Instalaciones:') !!}
           <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" @if($formulario->coordinado_con_instalaciones === 'si') checked @endif name="coordinado_con_instalaciones" class="custom-control-input" value="si">
            <label class="custom-control-label" for="customRadioInline1">SI</label>
          </div>
          <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" @if($formulario->coordinado_con_instalaciones === 'no') checked @endif name="coordinado_con_instalaciones" class="custom-control-input" value="no">
            <label class="custom-control-label" for="customRadioInline2">NO</label>
          </div>
        </div>
        <div class="mt-2">
            {!! Form::label('tecnico_accede_al_sitio', 'Tecnico accede al sitio:') !!}
            <div class="mx-1 custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline3" @if($formulario->tecnico_accede_al_sitio === 'si') checked @endif name="tecnico_accede_al_sitio" class="custom-control-input"value="si">
                <label class="custom-control-label" for="customRadioInline3">SI</label>
              </div>
              <div class="mx-1 custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline4" @if($formulario->tecnico_accede_al_sitio === 'no') checked @endif name="tecnico_accede_al_sitio" class="custom-control-input"value="no">
                <label class="custom-control-label" for="customRadioInline4">NO</label>
              </div>
         </div>

         <div class="mt-2" >
            {!! Form::label('tecnico_valida_direccion', 'Tecnico valida direccion postal con la del GLPI:') !!}
            <div class="mx-1 custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline5" @if($formulario->tecnico_valida_direccion === 'si') checked @endif name="tecnico_valida_direccion" class="custom-control-input" value="si">
                <label class="custom-control-label" for="customRadioInline5">SI</label>
              </div>
              <div class="mx-1 custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline6" @if($formulario->tecnico_valida_direccion === 'no') checked @endif name="tecnico_valida_direccion" class="custom-control-input" value="no">
                <label class="custom-control-label" for="customRadioInline6">NO</label>
              </div>
        </div>
    
        <div class="mt-2" >
            {!! Form::label('direccionamiento', 'Direccionamiento GLPI-Red:') !!}
            <div class="mx-1 custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline7" @if($formulario->direccionamiento === 'si') checked @endif name="direccionamiento" class="custom-control-input" value="si">
                <label class="custom-control-label" for="customRadioInline7">SI</label>
              </div>
              <div class="mx-1 custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline8" @if($formulario->direccionamiento === 'no') checked @endif name="direccionamiento" class="custom-control-input" value="no">
                <label class="custom-control-label" for="customRadioInline8">NO</label>
              </div>
        </div>
        <div class="mt-2" >
            {!! Form::label('if_en_ticket', 'IF en ticket GLPI:') !!}
            <div class="mx-1 custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline9" @if($formulario->if_en_ticket === 'si') checked @endif name="if_en_ticket" class="custom-control-input" value="si">
                <label class="custom-control-label" for="customRadioInline9">SI</label>
              </div>
              <div class="mx-1 custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline10" @if($formulario->if_en_ticket === 'no') checked @endif name="if_en_ticket" class="custom-control-input" value="no">
                <label class="custom-control-label" for="customRadioInline10">NO</label>
              </div>
        </div>
    
        <div class="mt-2" >
            {!! Form::label('tecnico_ubica_sala_de_equipos', 'Tecnico en sitio ubica sala de equipos/rack:') !!}
            <div class="mx-1 custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline11" @if($formulario->tecnico_ubica_sala_de_equipos === 'si') checked @endif name="tecnico_ubica_sala_de_equipos" class="custom-control-input" value="si">
                <label class="custom-control-label" for="customRadioInline11">SI</label>
              </div>
              <div class="mx-1 custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline12" @if($formulario->tecnico_ubica_sala_de_equipos === 'no') checked @endif name="tecnico_ubica_sala_de_equipos" class="custom-control-input" value="no">
                <label class="custom-control-label" for="customRadioInline12">NO</label>
              </div>
        </div>

        <div class="mt-2" >
          {!! Form::label('tecnico_instala_rack', 'IF indica que el técnico debe instalar rack?') !!}
          <div class="mx-1 custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline13" @if($formulario->tecnico_instala_rack === 'si') checked @endif name="tecnico_instala_rack" class="custom-control-input" value="si">
              <label class="custom-control-label" for="customRadioInline13">SI</label>
            </div>
            <div class="mx-1 custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline14" @if($formulario->tecnico_instala_rack === 'no') checked @endif name="tecnico_instala_rack" class="custom-control-input" value="no">
              <label class="custom-control-label" for="customRadioInline14">NO</label>
            </div>
      </div>
        
        <div class="mt-2">
          {!! Form::label('equipamiento_cumple_con_if', 'Equipamiento cumple con IF:') !!}
          <div class="mx-1 custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline15" @if($formulario->equipamiento_cumple_con_if === 'si') checked @endif name="equipamiento_cumple_con_if" class="custom-control-input" value="si">
              <label class="custom-control-label" for="customRadioInline15">SI</label>
            </div>
            <div class="mx-1 custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline16" @if($formulario->equipamiento_cumple_con_if === 'no') checked @endif name="equipamiento_cumple_con_if" class="custom-control-input" value="no">
              <label class="custom-control-label" for="customRadioInline16">NO</label>
            </div>
      </div>
        
        <div >
            {!! Form::label('usuario_final', 'Nombre del usuario final que recibe al técnico:') !!}
            {!! Form::text('usuario_final', null, ['class' => 'form-control']) !!}
           
         </div>
       
      <div class="mt-2">
        {!! Form::label('servicio_cumple_con_bw', 'Servicio cumple con bw de upgrade de IF') !!}
        <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline17" @if($formulario->servicio_cumple_con_bw === 'si') checked @endif name="servicio_cumple_con_bw" class="custom-control-input" value="si">
            <label class="custom-control-label" for="customRadioInline17">SI</label>
          </div>
          <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline18" @if($formulario->servicio_cumple_con_bw === 'no') checked @endif name="servicio_cumple_con_bw" class="custom-control-input" value="no">
            <label class="custom-control-label" for="customRadioInline18">NO</label>
          </div>
    </div>
    <div class="mt-2">
        {!! Form::label('servicio_cumple_con_bw_de_download', 'Servicio cumple con bw de download de IF') !!}
        <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline19" @if($formulario->servicio_cumple_con_bw_de_download === 'si') checked @endif name="servicio_cumple_con_bw_de_download" class="custom-control-input" value="si">
            <label class="custom-control-label" for="customRadioInline19">SI</label>
          </div>
          <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline20" @if($formulario->servicio_cumple_con_bw_de_download === 'no') checked @endif name="servicio_cumple_con_bw_de_download" class="custom-control-input" value="no">
            <label class="custom-control-label" for="customRadioInline20">NO</label>
          </div>
    </div>
    <div class="mt-2">
        {!! Form::label('usuario_valida_servicio_operativo', 'Usuario en sitio valida servicio operativo') !!}
        <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline21" @if($formulario->usuario_valida_servicio_operativo== 'si') checked @endif name="usuario_valida_servicio_operativo" class="custom-control-input" value="si">
            <label class="custom-control-label" for="customRadioInline21">SI</label>
          </div>
          <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline22" @if($formulario->usuario_valida_servicio_operativo === 'no') checked @endif name="usuario_valida_servicio_operativo" class="custom-control-input" value="no">
            <label class="custom-control-label" for="customRadioInline22">NO</label>
          </div>
    </div>
    <div class="mt-2">
        {!! Form::label('usuario_firma_remito', 'Usuario firma remito de la empresa') !!}
        <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline23" @if($formulario->usuario_firma_remito === 'si') checked @endif name="usuario_firma_remito" class="custom-control-input" value="si">
            <label class="custom-control-label" for="customRadioInline23">SI</label>
          </div>
          <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline24" @if($formulario->usuario_firma_remito === 'no') checked @endif name="usuario_firma_remito" class="custom-control-input" value="no">
            <label class="custom-control-label" for="customRadioInline24">NO</label>
          </div>
    </div>
    <div class="mt-2" >
        {!! Form::label('actualizacion_del_estado_del_dispositivo', 'Actualización del Estado del Dispositivo de red') !!}
        <div class="mx-0 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline25" @if($formulario->actualizacion_del_estado_del_dispositivo === 'si') checked @endif name="actualizacion_del_estado_del_dispositivo" class="custom-control-input" value="si">
            <label class="custom-control-label" for="customRadioInline25">SI</label>
          </div>
          <div class="mx-0 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline26" @if($formulario->actualizacion_del_estado_del_dispositivo === 'no') checked @endif name="actualizacion_del_estado_del_dispositivo" class="custom-control-input" value="no">
            <label class="custom-control-label" for="customRadioInline26">NO</label>
          </div>
    </div>
    <div class="mt-2" >
        {!! Form::label('migracion_abortada', 'Migracion abortada motivo:') !!}
        {!! Form::text('migracion_abortada', null, ['class' => 'form-control']) !!}
     </div>
     <div class="mt-2" >
        {!! Form::label('se_realizo_rollback', 'Se realizo rollback') !!}
        <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline27" @if($formulario->se_realizo_rollback=== 'si') checked @endif name="se_realizo_rollback" class="custom-control-input" value="si">
            <label class="custom-control-label" for="customRadioInline27">SI</label>
          </div>
          <div class="mx-1 custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline28" @if($formulario->se_realizo_rollback=== 'no') checked @endif name="se_realizo_rollback" class="custom-control-input" value="no">
            <label class="custom-control-label" for="customRadioInline28">NO</label>
          </div>
    </div>
    <div class="mt-2">
        {!! Form::label('pruebas_cargadas', 'Pruebas cargadas') !!}
      <div class="m-1 form-check ">
           <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_capturas_paronamicas) checked @endif name="pruebas_cargadas_capturas_paronamicas" id="inlineCheckbox1" value=1>
           <label class="form-check-label" for="inlineCheckbox1">Captura de panoramica de sala</label>
         </div>
         <div class="m-1 form-check ">
           <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_captura_rack) checked @endif name="pruebas_cargadas_captura_rack"  id="inlineCheckbox2" value=1>
           <label class="form-check-label" for="inlineCheckbox2">Captura de rack</label>
         </div>
         <div class="m-1 form-check ">
           <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_captura_electronica) checked @endif name="pruebas_cargadas_captura_electronica" id="inlineCheckbox3" value=1>
           <label class="form-check-label" for="inlineCheckbox2">Capturas de electronica energizada(que se vea seriales)</label>
         </div>
         <div class="m-1 form-check ">
           <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_captura_de_conexionado_CPE_y_router) checked @endif name="pruebas_cargadas_captura_de_conexionado_CPE_y_router" id="inlineCheckbox4" value=1>
           <label class="form-check-label" for="inlineCheckbox2">Captura de conexionado entre CPE y router</label>
         </div>
         <div class="m-1 form-check ">
            <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_captura_de_conexionado_router_y_LAN_LANes) checked @endif  name="pruebas_cargadas_captura_de_conexionado_router_y_LAN_LANes" id="inlineCheckbox5" value=1>
            <label class="form-check-label" for="inlineCheckbox2">Captura de conexionado router y LAN/LANes</label>
          </div>
          <div class="m-1 form-check ">
            <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_captura_de_diagrama) checked @endif name="pruebas_cargadas_captura_de_diagrama" id="inlineCheckbox6" value=1>
            <label class="form-check-label" for="inlineCheckbox2">Captura de diagrama(solo layer2)</label>
          </div>
          <div class="m-1 form-check">
            <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_captura_de_medicion_speedtest_net) checked @endif name="pruebas_cargadas_captura_de_medicion_speedtest_net" id="inlineCheckbox7" value=1>
            <label class="form-check-label" for="inlineCheckbox2">Captura de medicion https://www.speedtest.net/</label>
          </div>
          <div class="m-1 form-check">
            <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_captura_de_medicion_speedtest_gba) checked @endif name="pruebas_cargadas_captura_de_medicion_speedtest_gba" id="inlineCheckbox8" value=1>
            <label class="form-check-label" for="inlineCheckbox2">Captura de medicion https//speedtest.gba.gob.ar/</label>
          </div>
          <div class="m-1 form-check">
            <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_capturas_de_medicion_inventario) checked @endif name="pruebas_cargadas_capturas_de_medicion_inventario" id="inlineCheckbox9" value=1>
            <label class="form-check-label" for="inlineCheckbox2">Captura de medicion https//inventario.dpt.gba.gob.ar/</label>
          </div>
          <div class="m-1 form-check">
            <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_capturas_de_ingreso) checked @endif name="pruebas_cargadas_capturas_de_ingreso" id="inlineCheckbox10" value=1>
            <label class="form-check-label" for="inlineCheckbox2">Capturas de ingreso a las paginas/aplicativos que utilizan los usuarios</label>
          </div>
          <div class="m-1 form-check">
            <input class="form-check-input" type="checkbox" @if($formulario->pruebas_cargadas_captura_de_remito_firmado) checked @endif name="pruebas_cargadas_captura_de_remito_firmado" id="inlineCheckbox11" value=1>
            <label class="form-check-label" for="inlineCheckbox2">Captura de remito firmado</label>
          </div>
       </div>
        <div class="m-4">
            <label for="archivos" class="form-label">Adjuntar prueba</label>
            <input class="form-control" type="file" id="archivo" name="archivos">
        </div>
        
</div>

    

 
