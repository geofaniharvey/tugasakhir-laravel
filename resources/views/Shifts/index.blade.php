@extends('navs.app')

@section('title', 'Shifts')

@section('content')
<a href="/shifts/create" class="card-link btn-primary">Tambah Jadwal Shift</a>

@foreach ($shifts as $shift)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/shifts/{{ $shift['id'] }}"class="card-title">{{ $shift['name'] }}</a>
    <p class="card-text">{{ $shift['description'] }}.</p>
      <hr>
        <a href="/shifts/addpegawai/{{$shift['id']}}" class="card-link btn-primary">Tambah Pegawai Kedalam Jadwal</a>
          <ul class="list-group">
            @foreach ($shift->pegawais as $pegawai)
          
            <li class="list-group-item d-flex justify-content-between align-items-center">
             {{$pegawai->nama}}
               <form action="/shifts/deletepegawai/{{ $pegawai->id}}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="card-link btn-danger">X</button>
              </form>
            </li>
      
            @endforeach
          </ul>
        <hr>
    <a href="/shifts/{{ $shift['id'] }}/edit" class="card-link btn-warning">Edit Shift</a>
    <form action="/shifts/{{ $shift['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete group</button>
    </form>
  </div>
</div>
  
@endforeach
<div>
    {{ $shifts->links() }}
</div>
@endsection