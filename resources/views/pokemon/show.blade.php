@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="card" style="width: 18rem;">
    
        <img src="{{$pokemon['image']}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> <strong>Nombre:</strong> {{$pokemon['name']}}</h5>
          <div> <span class="card-text"><strong>Peso:</strong> {{$pokemon['weight']}}kg </span> </div>
         <div>  <span class="card-text"><strong>Altura:</strong> {{$pokemon['height']}}mt</span> </div>
         <div>   <span class="card-text"><strong>Habilidad:</strong> {{$pokemon['abilities']}}mt</span>
         </div>
          
        </div>
    </div>
    <button type="button" class="btn btn-secondary mt-5"><a class="text-light text-decoration-none" href="{{route('pokemons.index')}}">VOLVER</a></button>
</div>
    
@endsection

