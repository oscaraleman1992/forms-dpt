@extends('layouts.app')


@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Crear Formulario</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'formularios.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('formularios.form')
                </div>

            </div>

            <div class="card-footer">
              {!! Form::submit('Save', ['class' => 'btn btn-primary' ])!!} 
                {{-- <input type="submit" action="{{ route('formularios.show', [$formulario->id]) }}" class="btn btn-primary"> --}}
                <a href="{{ route('formularios.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection

