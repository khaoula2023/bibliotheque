@extends('layouts.admin_layout')

@section('content')

<div class="card">
    <div class="card-header">
      <h2 class="card-title">gestion de abonnes</h2>
    </div>
    <!-- /.card-header -->
     <div class="card-body">
     
     <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success"  href=""> <i class="fa fa-plus"> Ajouter un abonne</i></a>
            </div>
        </div>
        
    </div>

       <table id="example1" class="table table-bordered table-striped">
        <thead>    
                
        <tr>

            <th>Id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>nom_de_pere</th>
            <th>date_de_naissance</th>
            <th> telephone</th>
            <th> Numero_CIN</th>
            <th> email</th>
            <th> profession</th>
            <th> genre</th>
            <th>Adresse</th>
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

</div>
        
        </div>
    
          
    @endsection
    