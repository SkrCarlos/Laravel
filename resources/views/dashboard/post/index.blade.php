@extends('dashboard.master')

@section('content')

<a href="{{ route('post.create') }}" class="btn btn-success mt-2 mb-2">Crear</a>

<table class="table">
<thead>
    <tr>
        <td>
            ID
        </td>
        <td>
            Titulo
        </td>
        <td>
            Posteado
        </td>
        <td>
            Creación
        </td>
        <td>
            Actualización
        </td>
        <td>
            Acciones
        </td>
    </tr>
</thead>

<tbody>
        @foreach ($posts as $post)
            <tr>
                <td>
                    {{ $post->id }}
                </td>
                <td>
                    {{ $post->title }}
                </td>
                <td>
                    {{ $post->posted }}
                </td>
                <td>
                    {{ $post->created_at->format('d-m-Y') }}
                </td>
                <td>
                    {{ $post->updated_at->format('d-m-Y') }}
                </td>
                <td>
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">Actualizar</a>
                    <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                        @method('DELETE')
                        @csrf 
                        <button class="btn btn-danger " type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}

@endsection
