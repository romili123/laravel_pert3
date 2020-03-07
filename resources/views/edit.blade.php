@extends('master')
@section('content')
    @foreach ($mahasiswas as $m)
    <form action="{{route('mahasiswa.update', $m['no'])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" placeholder="nama" name="old_name" value="{{ $m['nama'] }}">
        <input type="text" placeholder="nama" name="name" value="{{ $m['nama'] }}">
        <input type="text" placeholder="class" name="class" value="{{$m['class']}}">  
        <input type="submit" value="Tambahkan">
    </form>
    @endforeach
@endsection
        