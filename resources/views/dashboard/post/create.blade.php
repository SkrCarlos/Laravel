@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route('post.store') }}" method="POST">
        
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="url_clean" class="form-label">Url limpia</label>
            <input type="text" name="url_clean" id="url_clean" class="form-control">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
        </div>

        <input type="submit" value="Enviar" class="btn btn-primary">

    </form>

@endsection