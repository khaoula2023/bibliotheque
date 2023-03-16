@extends('layouts.app')

@section('content')
    <h1>Ajouter une nouvelle donnée</h1>

    {!! Form::open(['action' => 'DonneesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('nom', 'Nom') !!}
            {!! Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'Entrez le nom']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('valeur', 'Valeur') !!}
            {!! Form::number('valeur', '', ['class' => 'form-control', 'placeholder' => 'Entrez la valeur']) !!}
        </div>
        {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection