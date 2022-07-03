@extends('master')

@section('title' , 'SC Parking | Codes promos')



@section('content')
  
<div class="col-md-6 grid-margin stretch-card"  style="margin-left: auto; margin-right: auto;">
    <div class="card">
      <div class="card-body">
        <h4  >Ajouter une nouveau code promo </h4>
       
        <form class="forms-sample">
          <div class="form-group">
            <label for="Nom">Nom</label>
            <input type="text" class="form-control" id="Nom" placeholder="Nom">
          </div>
          <div class="form-group">
            <label for="Prénom">Code</label>
            <input type="text" class="form-control" id="Prénom" placeholder="code">
          </div>
          <div class="form-group">
            <label for="email">Pourcentage</label>
            <input type="email" class="form-control" id="email" placeholder="Pourcentage">
          </div>
         <button type="submit" class="btn btn-primary me-2" >Enregistrer</button>
          
        </form>
      </div>
    </div>
  </div>

@endsection