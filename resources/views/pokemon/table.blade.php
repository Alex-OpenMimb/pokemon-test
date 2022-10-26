@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="d-flex justify-content-between">
    <h1>Pokémons</h1> 

  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Item</th>
        <th scope="col">Acciones</th>
        <th scope="col">Imágen</th>
      </tr>
    </thead>
    <tbody>
   
     @foreach ( $pokemons as  $pokemon)
          
    <tr>
        <th scope="row">{{$pokemon->id}}</th>
        <td>{{$pokemon->name}}</td>
        <td>
            <img src=" {{$pokemon->sprites->front_default}}" width="100"  alt="{{$pokemon->name}}">
           
        </td>
        <td>
            <div class="d-flex">
              
                <div class="mx-1">
                    <button type="button" class="btn btn-primary" id="btnEditId" ><a class="text-light text-decoration-none" href="{{route('pokemons.show',$pokemon->id)}}"><i class="icon-edit"></i></a></button>
                  </div>
                
            </div>
               
               
            </div>
        </td>   
    </tr>
    @endforeach
   
    </tbody>
  </table>
</div>

   

@endsection