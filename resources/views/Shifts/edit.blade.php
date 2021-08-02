@extends('navs.app')

@section('title', 'Rubah Jadwal')

@section('content')

  <form action="/shifts/{{ $shift['id'] }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{ old('name') ? old('name') : $shift['name'] }}">
      @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" name="description" id="exampleInputPassword1" value="{{ old('description') ? old('description') : $shift['description']  }}">
      @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
