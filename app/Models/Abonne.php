<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonne extends Model
{
    use HasFactory;
}

@extends('layouts.app')

@section('content')
    <h1>Liste des abonnés</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Téléphone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abonnes as $abonne)
                <tr>
                    <th scope="row">{{ $abonne->id }}</th>
                    <td>{{ $abonne->nom }}</td>
                    <td>{{ $abonne->adresse }}</td>
                    <td>{{ $abonne->telephone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection






