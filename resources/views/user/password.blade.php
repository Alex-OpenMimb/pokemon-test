@extends('layouts.admin')

@section('content')

<div class="container w-50">
    <h1>Cambiar Contraseña</h1>

    <form action="" method="POST" id="form_password_update">
        @csrf 
        @method('put')

        <div class="mb-3">
            <label for="emailId" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="passwordIdUser" aria-describedby="emailHelp" name="password" value=""  required>

        </div>
        @error('password')
        <div id="" class="form-text">* {{$message}}</div>
        @enderror
    
        <button type="submit" class="btn btn-primary">ENVIAR</button>
        <button type="button" class="btn btn-secondary" ><a class="text-light text-decoration-none" href="{{route('users.index')}}">VOLVER</a></button>
</form>


</div>

    
@endsection