@extends('dashboard.master')

@section('content')

    <form action="{{ route('post.store') }}" method="POST">
        
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titulo</label>
            <input readonly type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
        </div>

        <div class="mb-3">
            <label for="url_clean" class="form-label">Url limpia</label>
            <input readonly type="text" name="url_clean" id="url_clean" class="form-control" value="{{ $post->url_clean }}">
        </div>


    </form>

@endsection