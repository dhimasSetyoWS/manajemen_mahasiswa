<x-layout.content title="Edit">
    <form class="max-w-sm mx-auto" method="POST" action="{{ route('mahasiswa.update', $mahasiswa['id']) }}">
        @method('PATCH')
        @csrf
        {{-- Name --}}
        <label for="nama">Name : </label>
        <input type="text" id="nama" name="nama" class="w-full border bg-gray-600 rounded-md p-2 text-white mb-3"
            value="{{ $mahasiswa['nama'] }}" autocomplete="off" required />

        {{-- Nim --}}
        <label for="nim">NIM : </label>
        <input type="text" id="nim" name="nim"
            class="w-full border bg-gray-600 rounded-md p-2 text-white mb-3" value="{{ $mahasiswa['nim'] }}"
            autocomplete="off" required />

        {{-- Email --}}
        <label for="email">Email : </label>
        <input type="text" id="email" name="email"
            class="w-full border bg-gray-600 rounded-md p-2 text-gray-400 mb-3" value="{{ $mahasiswa['email'] }}"
            autocomplete="off" readonly/>

        <button class="button bg-blue-700 p-3 text-white rounded-md border hover:bg-white hover:text-black hover:cursor-pointer"
            type="submit">Edit</button>
    </form>
    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout.content>
