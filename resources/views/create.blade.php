<x-layout.content title="Create">
    <form class="max-w-sm mx-auto mb-3" method="POST" action="{{ route('mahasiswa.store') }}">
        @csrf
        <div class="mb-5 fadeInUp">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
            <input type="text" id="nama" name="nama" class="w-full border bg-gray-600 rounded-md p-2 text-white"
                placeholder="Fulan" autocomplete="off" required />
        </div>

        <div class="mb-5 fadeInUp">
            <label for="nim" class="block mb-2 text-sm font-medium text-gray-900">NIM</label>
            <input type="text" id="nim" name="nim" class="w-full bg-gray-600 rounded-md p-2 text-white"
                required autocomplete="off" />
        </div>
        <div class="mb-5 fadeInUp">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-600 rounded-md p-2 text-white"
                required />
        </div>
        <input class="bg-gray-900 border text-white p-2 rounded-lg hover:bg-amber-50 hover:text-black hover:border fadeIn"
            type="submit" value="Tambah">
    </form>
    @if ($errors->any())
        <div class="max-w-sm mx-auto bg-red-400 p-4 rounded mb-4 pulse text-white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</x-layout.content>
