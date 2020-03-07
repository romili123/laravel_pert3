@extends('master')
@section('content')
<form action="{{route('mahasiswa.store')}}" method="post">
    @csrf
    <input type="text" placeholder="nama" name="name">
    <input type="text" placeholder="class" name="class">  
    <input type="submit" value="Tambahkan">
</form>
@endsection