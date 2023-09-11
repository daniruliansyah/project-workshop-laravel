<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA PEKERJA</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        @include('layouts.header')
        @include('layouts.navbar')
        <h2>EDIT DATA PEKERJA
            @if($pekerja)
            <p class='nama_edit'>"{{$pekerja->nama_pekerja}}"</p>
        </h2>
        <form action="/pekerja/{{$pekerja->id_pekerja}}/update" method="post">
            @method('PUT')
            @csrf
            @endif
    </header>
    <main>
        @if($pekerja)
        <p class='subjudul'>==NAMA==</p>
        <p class='subisi'>saat ini : {{$pekerja->nama_pekerja}}</p>
        <p class='subisi'>edit :
            <input class='nama' type="text" name="nama" placeholder="nama lengkap">
            <p class='note'>*tidak ada perubahan, diisi ulang. bisa copas</p>
            <!--<button type="submit">update</button>-->
        </p>
        <p class='subjudul'>==ALAMAT==</p>
        <p class='subisi'>saat ini : {{$pekerja->alamat_pekerja}}</p>
        <p class='subisi'>edit :
            <input class='alamat' type="text" name="alamat" placeholder="alamat lengkap">
            <p class='note'>*tidak ada perubahan, diisi ulang. bisa copas</p>
            <!--<button type="submit">update</button>-->
        </p>
        <p class='subjudul'>==NOMOR TELEPON==</p>
        <p class='subisi'>saat ini : {{$pekerja->no_hp_pekerja}} </p>
        <p class='subisi'>edit :
            <input class='nohp' type="number" name='no_hp' placeholder='nomor hp (aktif)'>
            <p class='note'>*tidak ada perubahan, diisi ulang. bisa copas</p>
            <!--<button type="submit">update</button>-->
        </p>
        <p class='subjudul'>==FOTO DIRI==</p>
        <p class='subisi'>saat ini : {{$pekerja->foto_pekerja}}</p>
        <p class='subisi'>edit :
            <input class='foto'type="text" name='foto' placeholder='foto (3x4)'>
            <p class='note'>*tidak ada perubahan, diisi ulang. bisa copas</p>
        </p><br>
        <button type="submit"><a class='button'>update</a></button>
        @endif
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
    
</body>
</html>