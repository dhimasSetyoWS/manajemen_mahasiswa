<x-layout.content title="Seluruh Data Mahasiswa">
	<div class="grid grid-cols-3 gap-3 px-2">
		@foreach ($mahasiswa as $data)
			<div class="card bg-[#393E46] p-3 rounded-lg text-white">
				<div class="card-body mb-12">
					<h1 class="text-2xl">Nama : {{$data['nama']}}</h1>
					<hr>
					<h1 class="mt-2">NIM : {{$data['nim']}}</h1>
					<h1>Email : {{$data['email']}}</h1>
				</div>
				<div class="action-button">
					<form action="{{route('mahasiswa.destroy', $data['id'])}}" method="POST">
						@method('DELETE') 
						{{-- Spoofing Route --}}
						@csrf
						{{-- CSRF --}}
						<button type="submit" class="button danger bg-red-700 p-3  text-white rounded-md hover:cursor-pointer hover:bg-amber-50 hover:text-black">Delete Data</button>
					</form>
				</div>
			</div>
		@endforeach
	</div>
</x-layout>