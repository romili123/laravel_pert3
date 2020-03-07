<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($mahasiswas as $m)
        <div>ID : {{$m['no']}}</div>
        <div>Nama : {{$m['nama']}}</div>
        <div>Kelas : {{$m['class']}}</div>
    @endforeach

    <a href="{{route('mahasiswa.index')}}">< Kembali</a>
</body>
</html>