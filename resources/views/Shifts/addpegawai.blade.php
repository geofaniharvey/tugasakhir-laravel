@extends('navs.app')

@section('title', 'Shifts')

@section('content')
  <form action="/shifts/addpegawai/{{$shift->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Pilih Nama Pegawai untuk Dimasukan kedalam Shift</label>
      <br>
      <select class="form-select" aria-label="Default select example" name="pegawai_id`">
        <option selected>Daftar Pegawai</option>
        @foreach ($pegawai as $p)
        <option value="{{$p->id}}">{{$p->nama}}</option>
        @endforeach
      </select>

    </div>

    <button type="submit" class="btn btn-primary">Tambahkan ke Shift</button>
  </form>


@endsection
