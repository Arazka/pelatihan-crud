<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fitur Post') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-3 rounded-full w-56" href="{{ route('post.create') }}">Tambah Data</a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-3 px-6 text-center">No</th>
                            <th class="py-3 px-6 text-center">Judul</th>
                            <th class="py-3 px-6 text-center">Deskripsi</th>
                            {{-- <th class="py-3 px-6 text-center">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $post)
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-6 text-center">{{ $key+1 }}</td>
                            <td class="py-3 px-6 text-center">{{ $post->title }}</td>
                            <td class="py-3 px-6 text-center">{{ $post->deskripsi }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
