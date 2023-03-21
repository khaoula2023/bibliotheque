@extends('layouts.admin_layout')
 
@section('content')
   
   
   
    <!-- /.card -->

    <div class="card">
    <div class="card-header">
      <h2 class="card-title">gestion de employes</h2>
    </div>
    <!-- /.card-header -->
     <div class="card-body">
     
     <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success"  href=""> <i class="fa fa-plus"> Ajouter un nouveau Employe</i></a>
            </div>
        </div>
        
    </div>

       <table id="example1" class="table table-bordered table-striped">
        <thead>    
                
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>date_de_naissance</th>
            <th>Adresse</th>
            <th width="280px">Action</th>
        </tr>
        
        </thead>

        @foreach ($Employe as $Employes)

        


        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>date_de_naissance</th>
            <th>Adresse</th>
            <th width="280px">Action</th>
        </tr>
        
            <td>
                <form action="{{ route('Employes.destroy',$Employes->id) }}" method="POST">
                    <a class="btn btn-info" href=""> <i class="fa fa-eye"></i></a>
    
                    <a class="btn btn-primary" href=""> <i class="fa fa-edit"></i></a>

                    <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>

    </div>
              <!-- /.card-body -->
            </div>


    {!! $Employe->links() !!}
      
@endsection
