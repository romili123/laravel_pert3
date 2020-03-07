<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('mahasiswa.store')}}" method="post">
        @csrf
        <input type="text" placeholder="nama" name="name">
        <input type="text" placeholder="class" name="class">  
        <input type="submit" value="Tambahkan">
    </form>
</body>
</html>