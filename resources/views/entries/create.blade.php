@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">New Entry</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{url('entries/create')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="title">Titulo</label>
                                <input id="title" type="title" class="form-control
                                @error('title') is-invalid @enderror"
                                name="title" value="{{ old('title') }}"
                                required autocomplete="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Mensaje</label>
                                <textarea id="content"
                                    class="form-control
                                    @error('content') is-invalid @enderror"
                                    name="content"
                                    required autocomplete="content">{{ old('content') }}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            <button type="submit" class="btn btn-primary">Publicar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
