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
   
     @foreach ($users as $user)
          
    <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address ? $user->address:'Sin datos' }}</td>
        <td>{{$user->city ? $user->city:'Sin datos'}}</td>
        <td>
            <div class="d-flex">
              
                <div class="mx-1">
                    <button type="button" class="btn btn-primary" id="btnEditId" ><a class="text-light text-decoration-none" href="{{route('users.edit',$user->id)}}"><i class="icon-edit"></i></a></button>
                  </div>
                  <button type="button" class="btn btn-success" id="btnEditId" ><a class="text-light text-decoration-none" href="{{route('users.password')}}">Cambiar Clave</a></button>
                
            </div>
               
               
            </div>
        </td>   
    </tr>
    @endforeach
   
    </tbody>
  </table>
</div>

   

@endsection