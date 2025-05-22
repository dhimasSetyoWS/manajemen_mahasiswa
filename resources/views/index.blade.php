<x-layout.content title="Seluruh Data Mahasiswa">
	@if (session('success'))
        <div class="max-w-sm mx-auto bg-green-400 p-4 rounded mb-4 pulse">
			{{-- Flash Massage --}}
            {{session('success')}}
        </div>
    @endif
	@if (session('delete'))
        <div class="max-w-sm mx-auto bg-red-400 p-4 rounded mb-4 pulse">
			{{-- Flash Massage --}}
            {{session('delete')}}
        </div>
    @endif
	<div class="grid grid-cols-3 gap-3 px-2">
		@foreach ($mahasiswa as $data)
			<div class="card bg-[#393E46] p-3 rounded-lg text-white fadeIn">
				<div class="card-body mb-12">
					<h1 class="text-2xl">Nama : {{$data['nama']}}</h1>
					<hr>
					<h1 class="mt-2">NIM : {{$data['nim']}}</h1>
					<h1>Email : {{$data['email']}}</h1>
				</div>
				<div class="action-button flex align-baseline gap-3">
					<form action="{{route('mahasiswa.destroy', $data['id'])}}" method="POST">
						@method('DELETE')
						{{-- Spoofing Route --}}
						@csrf
						{{-- CSRF --}}
						<button type="submit" class="button danger bg-red-700 p-3  text-white rounded-md hover:cursor-pointer hover:bg-amber-50 hover:text-black">Delete Data</button>
					</form>
					<a href="{{route('mahasiswa.edit' , $data['id'])}}" class="button p-3 bg-blue-700 hover:bg-amber-50 text-white hover:text-black rounded-md">Edit</a>
				</div>
			</div>
		@endforeach
	</div>
	<div class="p-4 mt-3">
		{{$mahasiswa->links('vendor.pagination.tailwind')}}
	</div>
</x-layout>