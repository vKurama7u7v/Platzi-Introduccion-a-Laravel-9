<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Posts') }}
            <a href="{{ route('posts.create') }}"
            class="bg-gray-800 text-white rounded px-4 py-2 cursor-pointer text-sm"
            >Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="mb-6 font-semibold">Listado de Publicaciones</h2>


                    <table class="mb-4">
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4 font-semibold">#ID</td>
                            <td class="px-6 py-4 font-semibold">Titulo</td>
                        </tr>

                        @forelse ($posts as $post)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4 font-semibold">#{{ $post->id }}</td>
                            <td class="px-6 py-4">{{ $post->title }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('posts.edit', $post) }}" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input
                                        type="submit"
                                        value="Eliminar"
                                        class="bg-gray-500 text-white rounded px-4 py-2 cursor-pointer"
                                        onclick="return confirm('Desea eliminar el Post')"
                                    >
                                </form>
                            </td>
                        </tr>

                        @empty
                        <tr class="border-b border-gray-200 text-sm">
                            Upps! no hay ninguna publicacion disponible
                        </tr>
                        @endforelse

                    </table>

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
