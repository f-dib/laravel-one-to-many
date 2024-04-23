@extends('layouts.appadmin')

@section('content')

    <div class="container py-5">

        <h1 class="mb-4 text-center">Aggiungi una Tipologia</h1>

        <form action="{{route('admin.types.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Nome</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Salva</button>

        </form>
        
    </div>

@endsection