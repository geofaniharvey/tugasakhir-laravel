@extends('navs.app')

@section('title', 'Shift')

@section('content')
<div class="card">
    <div class="card-body">
        <h3>Shift : {{ $shift['name'] }} </h3>
        <h3>Keterangan : {{ $shift['description'] }} </h3>
    </div>
</div>
@endsection