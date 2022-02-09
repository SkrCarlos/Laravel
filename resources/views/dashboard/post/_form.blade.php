
@csrf

<div class="mb-3">
    <label for="title" class="form-label">Titulo</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
</div>

<div class="mb-3">
    <label for="url_clean" class="form-label">Url limpia</label>
    <input type="text" name="url_clean" id="url_clean" class="form-control" value="{{ old('url_clean', $post->title) }}">
</div>

<div class="mb-3">
    <label for="category_id" class="form-label">Categoría</label>
    
    <select name="category_id" id="category_id" class="form-control">
        @foreach ($categories as $title => $id)
            <option {{ $post->category_id == $id ? 'selected': '' }}  value="{{ $id }}">{{ $title }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="posted" class="form-label">Posted</label>
    
    <select name="posted" id="posted" class="form-control">
        @include('dashboard.partials.option-yes-not', ['val' => $post->posted])
    </select>
</div>

<div class="mb-3">
    <label for="content" class="form-label">Contenido</label>
    <textarea class="form-control" name="content" id="content" rows="3">{{ old('content', $post->title) }}</textarea>
</div>

<input type="submit" value="Enviar" class="btn btn-primary">
