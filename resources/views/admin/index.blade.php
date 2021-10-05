@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1>Bienvenido Administrador</h1>

    <div class="col-12">
        <ul>
            @foreach($users as $user)
                @if( $user->role != 'admin')
                <li>
                    {{ $user->id}} -
                    {{ $user->name}} -
                    {{ $user->email}} -
                    {{ $user->role}}
                </li>
                @endif
            @endforeach
        </ul>
    </div>

@endsection
