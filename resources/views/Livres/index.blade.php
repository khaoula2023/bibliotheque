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
            <th>Code interne</th>
            <th>code externe</th>
            <th>ISBN</th>
            <th>titre</th>
            <th>auteur</th>
            <th>classement</th>
            <th>classification</th>
            <th>nom d'edition</th>
            <th>lieu d'edition</th>
            <th>date d'edition</th>
            <th>Nombre de pages</th>
            <th width="280px">Action</th>
        </tr>
        
        </thead>

        @foreach ($livre as $livres)

        


        <tr>
            <td>{{ $livres->id }} </td>
            <td>{{ $livres->Code_interne }}</td>
            <td>{{ $livres->Code_externe }}</td>
            <td>{{ $livres->ISBN }}</td>
            <td>{{ $livres->Titre }}</td>
            <td>{{ $livres->Auteur }}</td>
            <td>{{ $livres->Classement }}</td>
            <td>{{ $livres->Classification }}</td>
            <td>{{ $livres->Nom_edition }}</td>
            <td>{{ $livres->Lieu_edition }}</td>
            <td>{{ $livres->Date_edition }}</td>
            <td>{{ $livres->Nombre_de_pages }}</td>
            <td>
                <form action="{{ route('Livres.destroy',$livres->id) }}" method="POST">
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


    {!! $livre->links() !!}
      
@endsection
