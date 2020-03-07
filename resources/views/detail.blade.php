@extends('master')
@section('content')
    @foreach ($mahasiswas as $m)
    <div>ID : {{$m['no']}}</div>
    <div>Nama : {{$m['nama']}}</div>
    <div>Kelas : {{$m['class']}}</div>
    @endforeach

    <a href="{{route('mahasiswa.index')}}">< Kembali</a>
@endsection
    