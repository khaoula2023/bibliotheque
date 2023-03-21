@extends('layouts.admin_layout')
 
@section('content')
   
   
   
    <!-- /.card -->

    <div class="card">
    <div class="card-header">
      <h2 class="card-title">gestion de Abonnes</h2>
    </div>
    <!-- /.card-header -->
     <div class="card-body">
     
     <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success"  href=""> <i class="fa fa-plus"> Ajouter un nouveau Abonne</i></a>
            </div>
        </div>
        
    </div>

       <table id="example1" class="table table-bordered table-striped">
        <thead>    
                
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Nom de pere</th>
            <th>Date de date_de_naissance</th>
            <th>Telephone</th>
            <th>Numero CIN</th>
            <th>Email</th>
            <th>Profession</th>
            <th>Genre</th>
            <th>Adresse</th>
            <th width="280px">Action</th>
        </tr>
        
        </thead>

        @foreach ($Abonne as $Abonnes)

        


        <tr>
            <td>{{ $Abonnes->id }} </td>
            <td>{{ $Abonnes->Nom }}</td>
            <td>{{ $Abonnes->prenom }}</td>
            <td>{{ $Abonnes->Nom_de_pere }}</td>
            <td>{{ $Abonnes->date_de_naissance }}</td>
            <td>{{ $Abonnes->Telephone }}</td>
            <td>{{ $Abonnes->Numero_CIN }}</td>
            <td>{{ $Abonnes->Email }}</td>
            <td>{{ $Abonnes->Profession }}</td>
            <td>{{ $Abonnes->Genre }}</td>
            <td>{{ $Abonnes->Adresse }}</td>
            <td>
                <form action="{{ route('Abonnes.destroy',$Abonnes->id) }}" method="POST">
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


    {!! $Abonne->links() !!}
      
@endsection
