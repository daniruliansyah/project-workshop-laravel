<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEKERJA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        @include('layouts.header')
        @include('layouts.navbar')
        <h2>DAFTAR PEKERJA</h2>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID Pekerja</th>
                    <th class='nama'>Nama Pekerja</th>
                    <th class='tgl_lahir'>Tanggal Lahir</th>
                    <th class='alamat'>Alamat Pekerja</th>
                    <th class='nohp'>No Hp Pekerja</th>
                    <th class='foto'>Foto Pekerja</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pekerja as $pekerja)
                <tr>
                    @csrf
                    <td>{{$pekerja->id_pekerja}}</td>
                    <td>{{$pekerja->nama_pekerja}}</td>
                    <td>{{$pekerja->tgl_lahir}}</td>
                    <td>{{$pekerja->alamat_pekerja}}</td>
                    <td>{{$pekerja->no_hp_pekerja}}</td>
                    <td>{{$pekerja->foto_pekerja}}</td>
                    <td><button type="button"><a class='button' href='pekerja/{{$pekerja->id_pekerja}}/edit'>edit</a></button></td>
                    <form action='pekerja/{{$pekerja->id_pekerja}}/delete' method='post'>
                    @csrf
                    @method('delete')
                    <td><button class='delete' type="submit">delete</button></td>
                    </form>
                </tr>
            @endforeach 
            </tbody>
        </table>
        <button type="button"><a class='button' href='pekerja/create'>tambah+</a></button>
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>