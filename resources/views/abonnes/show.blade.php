@extends('abonnes.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $abonnes->name }}</h5>
        <p class="card-text">Address : {{ $abonnes->address }}</p>
        <p class="card-text">Phone : {{ $abonnes->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
  </div>
   
@endsection


