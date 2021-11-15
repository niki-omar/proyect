{{-- Muestra informacion despues de Welcome, este viene por defecto y
    me debe redigirir hacia navbar.blade.php --}}

@extends('layouts.app')
@section('content')
<!-- Con este section me redigirire hacia Create.blade.php -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">Ultimas Entradas</h1>
            @foreach ($entries as $entry)
            <div class="card mb-4">
                <div class="card-header">
                    {{$entry->id}}.{{$entry->title}}
                </div>
                <div class="card-body">
                    <p>{{$entry->content}}</p>
                </div>
                <div class="card-footer">
                    Autor:
                    <a href="{{url('@'.$entry->user->username)}}">
                        {{$entry->user->name}}
                    </a>

                </div>
            </div>
            @endforeach
            {{ $entries->links('pagination::bootstrap-4') }}   <!-- Crea una paginacion automatia
            la cual es traida desde GuestController     -->
            {{-- {{ $entries->links() }}    not working adecuate--}}

        </div>
    </div>
</div>
@endsection
