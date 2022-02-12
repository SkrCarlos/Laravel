@extends('web.master')

@section('content')
    <h1>Contenido Inicial</h1>

    <div class="card mt-5" v-for="post in posts">
        <img :src=" '/images/' + post.image" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">@{{ post.title }}</h5>
            <p class="card-text">@{{ post.content }}</p>
            <a href="#" class="btn btn-primary">Ver Resumen</a>
        </div>
    </div>

    <list-posts></list-posts>

@endsection