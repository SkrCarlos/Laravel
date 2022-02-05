
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
    <label for="content" class="form-label">Contenido</label>
    <textarea class="form-control" name="content" id="content" rows="3">{{ old('content', $post->title) }}</textarea>
</div>

<input type="submit" value="Enviar" class="btn btn-primary">
