@include('default')


   <div>
    <h1> LISTE DES TACHES </h1>
   </div>
   
 

<div class="container">
   
    <div class="row"> 
        @foreach($taches as $t)
            <div class="col-12 col-md-4 my-1"> 
                <div class="card">
                    <div class="card-header">
                        Quote {{$t->nom_tache}}
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <h5 class="card-tittle"> Priorite: {{$t->priorite}} </h5>
                            <h5 class="card-tittle">  statut: 
                                @if ($t-> is_termine==1)
                                  Terminee
                                @else
                                  En Cour
                                @endif
                            </h5>
                        </blockquote>
                        <a href="/Taches/{{$t->id}}/details"  class="btn btn-primary" > DETAILS </a>
                        <a href=""  class="btn btn-danger" > SUPPRIMER </a>
                    </div>
                </div>
            </div>
        @endforeach 
    </div>

</div>
 
