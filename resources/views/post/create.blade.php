<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <div class="grid gap-6 mb-2 p-5">
                        <div class="">
                            <label class="grid" for="title">Title</label>
                            <input class="w-full rounded-lg" type="text" name="title" id="title" placeholder="isikan title" required>

                        </div>
                        <div class="">
                            <label class="grid" for="deskripsi">Deskripsi</label>
                            <input class="w-full rounded-lg" type="text" name="deskripsi" id="deskripsi" placeholder="isikan deskripsi" required>
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 p-5 w-56">
                        <button class="bg-blue-500 text-white hover:bg-blue-700 rounded-full py-2 px-3 " type="submit">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
