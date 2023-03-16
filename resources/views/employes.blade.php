@extends('layouts.app')

</div>
        
        </div>
    
           <table id="example1" class="table table-bordered table-striped">
            <thead>    
                    
            <tr>
                <th>Id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th> telephone</th>
                <th>date_embauche</th>

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
    