@extends('navs.app')

@section('title', 'Pegawai')

@section('content')
  <form action="/pegawais" method="POST">
    @csrf
   
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') }}">
      @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">No Telepon</label>
      <input type="text" class="form-control" name="telp" id="exampleInputPassword1" value="{{ old('telp') }}">
      @error('telp')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">NIK</label>
      <input type="text" class="form-control" name="nik" id="exampleInputPassword1" value="{{ old('nik') }}">
      @error('nik')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
