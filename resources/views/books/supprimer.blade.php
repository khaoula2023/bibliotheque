@extends('layouts.app')

@section('content')
    <h1>Supprimer une donnée</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $donnee->nom }}</h5>
            <p class="card-text">{{ $donnee->valeur }}</p>
            {!! Form::open(['action' => ['DonneesController@destroy', $donnee->id], 'method' => 'POST']) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
Ce code utilise à nouveau le moteur de template Blade de Laravel pour afficher du HTML. Il affiche les informations de la donnée à supprimer dans une carte Bootstrap et utilise un formulaire pour soumettre la demande de suppression. Le formulaire utilise la méthode DELETE pour envoyer la requête de suppression à la route DonneesController@destroy. Vous pouvez bien sûr personnaliser ce code en fonction de vos besoins spécifiques.




khaoula bensmida
modifier.blade.php
Voici un exemple de code PHP que vous pouvez ajouter dans un fichier Laravel modifier.blade.php pour afficher le formulaire de modification d'une donnée :

php
Copy code
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
Ce code utilise le moteur de template Blade de Laravel pour afficher du HTML et un formulaire de modification de données. Le formulaire utilise la méthode POST pour soumettre les données modifiées à la route DonneesController@update, avec une méthode PUT pour mettre à jour les données existantes. Les champs du formulaire sont pré-remplis avec les valeurs actuelles de la donnée à modifier. Vous pouvez personnaliser ce code en fonction de la structure de vos données et de vos besoins spécifiques.





