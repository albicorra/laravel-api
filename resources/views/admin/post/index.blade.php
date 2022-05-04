@extends('layouts.app')

@section('content')

    <div class="container">
        <a class="btn btn-primary my-3" href="{{route('admin.posts.create')}}">Crea un post</a>
    
        @foreach ($posts as $post)
            <h3>{{$post['title']}}</h3>
        @endforeach
    </div>

@endsection