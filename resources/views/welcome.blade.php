<x-layout.content title="Welcome">
    <div id="contentHeader" class="p-4 m-12 text-center bg-amber-50 rounded-lg shadow-sm fadeInUp">
        <p class="mb-4 text-4xl">Management Mahasiswa.</p>
        <p class="mb-12 text-4xl">Website yang memungkinkan anda mengelola data mahasiswa.</p>
        <a href="{{ route('mahasiswa.create') }}"
            class="bg-[#d8d6d2] p-3 mx-2 hover:bg-black hover:text-white rounded-lg">Buat</a>
        <a href="{{ route('mahasiswa.index') }}" class="bg-[#d8d6d2] p-3 mx-2 hover:bg-black hover:text-white rounded-lg">Lihat</a>
    </div>
</x-layout>
