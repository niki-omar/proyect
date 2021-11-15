
{{-- Muestra informacion despues de Welcome, este viene por defecto y
    me debe redigirir hacia navbar.blade.php --}}

@extends('layouts.app')
@section('content')  <!-- Con este section me redigirire hacia Create.blade.php -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <p>Mis entradas</p>
                    <ul>
                        @foreach ($entries as $entry)
                        <li>
                            <a
                            href="{{$entry->getUrl()}}">{{$entry->title}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
