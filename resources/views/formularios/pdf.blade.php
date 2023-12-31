@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>PDF</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($formulario, ['route' => ['formularios.update', $formulario->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('formularios.fields')
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection