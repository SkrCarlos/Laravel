@extends('dashboard.master')

@section('content')

    <form action="{{ route('user.store') }}" method="POST">
        
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input readonly type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
        </div>

        <div class="mb-3">
            <label for="surname" class="form-label">Apellido</label>
            <input readonly type="text" name="surname" id="surname" class="form-control" value="{{ $user->surname }}">
        </div>

    </form>

@endsection