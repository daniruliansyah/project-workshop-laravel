<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PEKERJA</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        @include('layouts.header')
        @include('layouts.navbar')
        <h2>ADD PEKERJA</h2>
    </header>
    <main>
        <h5>MASUKAN DATA PEKERJA :</h5>
        <form action="/pekerja/add" method="post">
            @csrf
            <input class='nama' type="text" name="nama" placeholder="nama lengkap" required><br>
            <input class='tgl_lahir' type="date" name="tgl_lahir" required><br>
            <input class='alamat' type="text" name="alamat" placeholder="alamat lengkap" required><br>
            <input class='nohp' type="number" name='no_hp' placeholder='nomor hp (aktif)' required><br>
            <input class='foto'type="text" name='foto' placeholder='foto (3x4)' required><br>
            <button type="submit">submit</button>
        </form>
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>