@extends('dashboard.master')

@section('content')

<a href="{{ route('category.create') }}" class="btn btn-success mt-2 mb-2">Crear</a>

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
            URL limpia
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
        @foreach ($categories as $category)
            <tr>
                <td>
                    {{ $category->id }}
                </td>
                <td>
                    {{ $category->title }}
                </td>
                <td>
                    {{ $category->url_clean }}
                </td>
                <td>
                    {{ $category->created_at->format('d-m-Y') }}
                </td>
                <td>
                    {{ $category->updated_at->format('d-m-Y') }}
                </td>
                <td>
                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-secondary">Actualizar</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ $category->id }}">Borrar</button>    
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $categories->links() }}


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Seguro que desea borrar el registro seleccionado?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

        <form id="formDelete" method="POST" action="{{ route('category.destroy', 0) }}" data-action="{{ route('category.destroy', 0) }}">
            @method('DELETE')
            @csrf 
            <button class="btn btn-danger " type="submit">Borrar</button>
        </form>

      </div>
    </div>
  </div>
</div>

<script>
    window.onload = function() {
        var deleteModal = document.getElementById('deleteModal')
        deleteModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var id = button.getAttribute('data-bs-id')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.

            action = document.getElementById('formDelete').getAttribute('data-action').slice(0,-1) + id
            
            document.getElementById('formDelete').action = action

            // Update the modal's content.
            var modalTitle = deleteModal.querySelector('.modal-title')

            modalTitle.textContent = 'Vas a borrar la CATEGORIA:  ' + id
        })
    }
</script>

@endsection
