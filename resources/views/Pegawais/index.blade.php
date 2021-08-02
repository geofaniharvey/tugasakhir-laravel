@extends('navs.app')

@section('title', 'Pegawai')

@section('content')
<a href="/pegawais/create" class="card-link btn-primary">Tambah Pegawai</a>

@foreach ($pegawais as $pegawai)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/pegawais/{{ $pegawai['id'] }}"class="card-title">{{ $pegawai['nama'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{ $pegawai['nik'] }}</h6>
    <p class="card-text">{{ $pegawai['telp'] }}.</p>
    
    <a href="/pegawais/{{ $pegawai['id'] }}/edit" class="card-link btn-warning">Edit Data</a>
    <form action="/pegawais/{{ $pegawai['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Hapus Data</button>
    </form>
  </div>
</div>
  
@endforeach
<div>
    {{ $pegawais->links() }}
</div>
@endsection