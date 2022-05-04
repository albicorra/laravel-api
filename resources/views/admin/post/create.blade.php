@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Crea un nuovo post</h1>

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input class="form-control form-control-lg @error('title') is-invalid @enderror" type="text" name="title" placeholder="inserisci il titolo" value="{{old('title')}}">
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="content">Contenuto</label>
                <textarea class="form-control" id="FormControlTextarea1" name="content" rows="3" placeholder="Inserisci il contenuto del post">{{old('content')}}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="published_at">Data di pubblicazione</label>
                <input class="form-control form-control-lg @error('published_at') is-invalid @enderror" type="date" name="published_at" placeholder="inserisci il titolo" value="{{old('published_at')}}">
                @error('published_at')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <button type="submit" class="btn btn-primary my-3">Crea un post</button>

            </div>
        </form>
    </div>


@endsection