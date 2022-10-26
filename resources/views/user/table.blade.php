@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="d-flex justify-content-between">
    <h1>Usuario</h1> 

  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Item</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">dirección</th>
        <th scope="col">ciudad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
   
     {{-- @foreach ($users as $user) --}}
          
    <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->city}}</td>
        <td>
            <div class="d-flex">
              
             <a href="">link</a>
                
            </div>
               
               
            </div>
        </td>   
    </tr>
    {{-- @endforeach --}}
   
    </tbody>
  </table>
</div>

   

@endsection