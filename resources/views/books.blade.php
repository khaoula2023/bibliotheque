@extends('layouts.admin_layout')
 
@section('content')
   
   
   
    <!-- /.card -->

    <div class="card">
    <div class="card-header">
      <h2 class="card-title">gestion de livres</h2>
    </div>
    <!-- /.card-header -->
     <div class="card-body">
     
     <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success"  href=""> <i class="fa fa-plus"> Ajouter un nouveau livre</i></a>
            </div>
        </div>
        
    </div>

       <table id="example1" class="table table-bordered table-striped">
        <thead>    
                
        <tr>
            <th>Id</th>
            <th>Code livre</th>
            <th>Code interne</th>
            <th>code externe</th>
            <th>titre</th>
            <th>titre parallele </th>
            <th>auteur</th>
            <th>classification</th>
            <th>classement</th>
            <th>categorie</th>
            <th>langue</th>
            <th>maison d'edition</th>
            <th>Nombre de pages</th>
            <th width="280px">Action</th>
        </tr>

        </thead>
        <tr>
            <td>
            <a class="btn btn-info" href=""> <i class="fa fa-eye"> Consulter</i></a>
    
            <a class="btn btn-primary" href=""> <i class="fa fa-edit"> Modifier</i></a>
            <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"> Supprimer</i> </button>

            </td>
        </tr>
    </table>

    </div>
              <!-- /.card-body -->
            </div>

      
@endsection
