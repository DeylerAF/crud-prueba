@extends('layouts.app')

@section('title', 'Registro')

@section('content')

<div class="col-12 col-md-3 m-auto">
    <div class="row">
        <h1 class="col-12">Iniciar Seccion</h1>
    </div>

    <form class="row" action="" method="POST">
        @csrf

        <div class="col-12 pt-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico: ">
        </div>

        <div class="col-12 pt-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña: ">
        </div>
        @error('message')
            <div class="col-12 pt-3">
                <p class="form-control border border-danger text-white bg-danger bg-gradient">
                    * {{ $message }}
                </p>
            </div>
        @enderror
        <div class="col-12 pt-3">
            <button type="submit" class="btn btn-primary" style="width: 100%;">Iniciar Sesion</button>
        </div>
    </form>
</div>

@endsection
