@extends('navs.app')

@section('title', 'Pegawai')

@section('content')
<div class="card">
    <div class="card-body">
        <h3>Nama Pegawai : {{ $pegawai['nama'] }} </h3>
        <h3>Nomor Telp : {{ $pegawai['telp'] }} </h3>
        <h3>Nomor Induk Kepegawaian : {{ $pegawai['nik'] }} </h3>
    </div>
</div>
@endsection