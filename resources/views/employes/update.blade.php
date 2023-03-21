@extends('admin_layouts.app')

@section('content')


<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit employes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Employe.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('Employes.update','$Employes->id') }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id:</strong>
                    <input type="id" name="id" value="{{ $Employes->id }}" class="form-control" placeholder="id">
                </div>
            </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Categories_id:</strong>
                    <input type="id" name="categories_id" value="{{ $Employes->categories_id }}" class="form-control" placeholder="Categories_id">
                </div>
            </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" value="{{ $Employes->description }}" class="form-control" placeholder="description">
                </div>
            </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>titre:</strong>
                    <input type="date" name="titre" value="{{ $Books->titre }}" class="form-control" placeholder="titre">
                </div>
            </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="float" name="price" value="{{ $Books->price }}" class="form-control" placeholder="Price">
                </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
   
    </form>    

 

@endsection