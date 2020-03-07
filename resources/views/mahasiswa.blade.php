@extends('master')
@section('content')
    @if ($message = Session::get('success'))
    <h1 style="color: green">{{ $message }}</h1>
    @elseif($message = Session::get('error'))
    <h1 style="color: red">{{ $message }}</h1>
    @endif
    <a href="{{ route('mahasiswa.create') }}">Tambah</a>
    <form action="" method="get">
    <select name="class">
        <option value="">Semua</option>
        <option value="6A">6A</option>
        <option value="6B">6B</option>
        <option value="6C">6C</option>
        <option value="6D">6D</option>
    </select>
    <input type="submit" value="Cari">
    </form>

    <table>
    <thead>
        <tr>
            <th><b>No.</b></th>
            <th><b>class</b></th>
            <th><b>Nama</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $m)
            <tr>
                <td>{{$m['no']}}</td>
                <td>{{$m['class']}}</td>
                <td>{{$m['nama']}}</td>
                <td><a href="{{route('mahasiswa.show', $m['no'])}}">Lihat</a> || <a href="{{route('mahasiswa.edit',$m['no'])}}">Edit</a> <br>
                <form action="{{route('mahasiswa.destroy', $m['no'])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" value="{{$m['nama']}}" name="name">
                    <input type="submit" value="Hapus" onclick="return alert('Apakah anda yakin?')">
                </form>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection
    