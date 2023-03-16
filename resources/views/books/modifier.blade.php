@extends('layouts.app')

@section('content')
    <h1>Modifier une donnée</h1>

    {!! Form::open(['action' => ['DonneesController@update', $donnee->id], 'method' => 'POST']) !!}
        {!! Form::hidden('_method', 'PUT') !!}
        <div class="form-group">
            {!! Form::label('nom', 'Nom') !!}
            {!! Form::text('nom', $donnee->nom, ['class' => 'form-control', 'placeholder' => 'Entrez le nom']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('valeur', 'Valeur') !!}
            {!! Form::number('valeur', $donnee->valeur, ['class' => 'form-control', 'placeholder' => 'Entrez la valeur']) !!}
        </div>
        {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection