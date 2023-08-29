<div class="table-responsive">
    <table class="table" id="formularios-table">
        <thead>
        <tr>
            <th>Id Sitio</th>
        <th>Capa De Red</th>
        <th>Tecnico</th>
        <th>Coordinado Con Instalaciones</th>
        {{-- <th>Tecnico Accede Al Sitio</th>
        <th>Tecnico Valida Direccion</th>
        <th>Direccionamiento</th>
        <th>If En Ticket</th>
        <th>Tecnico Ubica Sala De Equipos</th>
        <th>Tecnico Instala Rack</th>
        <th>Equipamiento Cumple Con If</th>
        <th>Usuario Final</th>
        <th>Servicio Cumple Con Bw</th>
        <th>Servicio Cumple Con Bw De Download</th>
        <th>Usuario Valida Servicio Operativo</th>
        <th>Usuario Firma Remito</th>
        <th>Actualizacion Del Estado Del Dispositivo</th>
        <th>Migracion Abortada</th>
        <th>Se Realizo Rollback</th>
        <th>Pruebas Cargadas</th> --}}
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($formularios as $formulario)
            <tr>
                <td>{{ $formulario->id_sitio }}</td>
                <td>{{ $formulario->capa_de_red }}</td>
                <td>{{ $formulario->tecnico }}</td>
                <td>{{ $formulario->coordinado_con_instalaciones }}</td>
                {{-- <td>{{ $formulario->tecnico_accede_al_sitio }}</td>
                <td>{{ $formulario->tecnico_valida_direccion }}</td>
                <td>{{ $formulario->direccionamiento }}</td>
                <td>{{ $formulario->if_en_ticket }}</td>
                <td>{{ $formulario->tecnico_ubica_sala_de_equipos }}</td>
                <td>{{ $formulario->tecnico_instala_rack }}</td>
                <td>{{ $formulario->equipamiento_cumple_con_if }}</td>
                <td>{{ $formulario->usuario_final }}</td>
                <td>{{ $formulario->servicio_cumple_con_bw }}</td>
                <td>{{ $formulario->servicio_cumple_con_bw_de_download }}</td>
                <td>{{ $formulario->usuario_valida_servicio_operativo }}</td>
                <td>{{ $formulario->usuario_firma_remito }}</td>
                <td>{{ $formulario->actualizacion_del_estado_del_dispositivo }}</td>
                <td>{{ $formulario->migracion_abortada }}</td>
                <td>{{ $formulario->se_realizo_rollback }}</td>
                <td>{{ $formulario->pruebas_cargadas }}</td> --}}
                <td width="120">
                    {!! Form::open(['route' => ['formularios.destroy', $formulario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('formularios.show', [$formulario->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('formularios.edit', [$formulario->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="{{ route('formularios.pdf', [$formulario->id]) }}"
                            class='btn btn-default btn-xs'>
                            <i class="fas fa-print"></i>
                         </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
