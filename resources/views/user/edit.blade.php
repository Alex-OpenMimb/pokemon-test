@extends('layouts.admin')

@section('content')

<div class="container w-50">
    <h1> Editar Usuario</h1>

    <form action="{{route('users.update',$user->id)}}" method="POST" id="">
        @csrf   
     
          @method('PUT')
       
        
        <div class="mb-3">
          <label for="nameId" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nameIdUser" aria-describedby="emailHelp" name="name" value="{{$user->name}}">
    
         @error('name')
             <div id="" class="form-text">* {{$message}}</div>
         @enderror
          
        </div>

        <div class="mb-3">
          <label for="nameId" class="form-label">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="nameIdUser" aria-describedby="emailHelp" name="birthdate" value="">
    
         @error('birthdate')
             <div id="" class="form-text">* {{$message}}</div>
         @enderror
          
        </div>
        

        <div class="mb-3">
          <label for="emailId" class="form-label">Email</label>
          <input type="email" class="form-control" id="emailIdUser" aria-describedby="emailHelp" name="email" value="{{$user->email}}" >
          @error('email')
              <div id="" class="form-text">* {{$message}}</div>
           @enderror
        </div>


        <div class="mb-3">
          <label for="emailId" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="emailIdUser" aria-describedby="emailHelp" name="address" value="{{$user->address ? $user->address:'Sin datos'}}" >
          @error('address')
              <div id="" class="form-text">* {{$message}}</div>
           @enderror
        </div>

        <div class="mb-3">
          <label for="emailId" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="emailIdUser" aria-describedby="emailHelp" name="city" value="{{$user->city ? $user->city:'Sin datos'}}" >
          @error('city')
              <div id="" class="form-text">* {{$message}}</div>
           @enderror
        </div>

    
       
        <button type="submit" class="btn btn-primary">ENVIAR</button>
        <button type="button" class="btn btn-secondary"><a class="text-light text-decoration-none" href="{{route('users.index')}}">VOLVER</a></button>
      
    </form> 
</div>
    
@endsection