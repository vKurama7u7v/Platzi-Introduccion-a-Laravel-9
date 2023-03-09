@csrf
<label for="title" class="uppercase text-gray-700 text-xs">Titulo</label>
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value=" {{ old('title', $post->title) }}">

<label for="title" class="uppercase text-gray-700 text-xs">Slug</label>
<span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>
<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4" value=" {{ old('slug', $post->slug) }}">


<label for="body" class="uppercase text-gray-700 text-xs">Contenido</label>
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
<textarea name="body" id="" class="rounded border-gray-200 w-full mb-4" rows="5">{{ old('body', $post->body) }}</textarea>

<div class="flex items-center justify-between">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Regresar</a>
    <input type="submit" value="Guardar" class="bg-gray-800 text-white rounded px-4 py-2 cursor-pointer">
</div>