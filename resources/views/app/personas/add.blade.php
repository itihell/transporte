@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        @foreach ($errors->all() as $error)
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Holy guacamole!</strong> {{ $error }}
        </div>
        
        @endforeach         
        
        {!! Form::open(['route' => 'persona.store']) !!}
        @include('app.personas.fieldsPersonas')
        {!! Form::submit('Guardar') !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection