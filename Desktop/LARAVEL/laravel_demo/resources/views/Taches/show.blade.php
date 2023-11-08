<!DOCTYPE html>
<html lang="en">
@include('default')
<div class="container">
    <h1> je souhaite afficher les taches selectionnées </h1> 
    <div class="card">
        <h5 class="card-tittle" > Nom tache : {{$tachetrouvee->nom_tache}}</h5>
      <h5 class="card-tittle"> Priorite : {{$tachetrouvee->priorite}} </h5>
      <p class="card-texte">  Desciption: {{$tachetrouvee->description_tache}} </p>
      <!-- <a href=""></a> -->
      <p class="card-texte">  statut: 
      @if ($tachetrouvee-> is_termine==1)
      Terminee
      @else
      En Cour 
      <br>
      <a href="/Taches/terminee/{{$tachetrouvee->id}}" class="btn btn-danger" > Terminer </a>
      @endif
      </p>
      
    </div>
</div>    
