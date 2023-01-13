<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penilaian Siswa</title>
</head>
<body>
    {{-- ----- HEADER ----- --}}
    <div class="header">
        <img src="{{ asset ('/images/header.jpg') }}" alt="">
    </div>

    {{-- ----- MENU ----- --}}
    <div class="menu">
        <b>
            <a href="/home">HOME</a>
            @if (session('user')->role == 'admin')

            <a href="/guru/index">Guru</a>
            <a href="/jurusan/index">Jurusan</a>
            <a href="/kelas/index">Kelas</a>
            <a href="/siswa/index">Siswa</a>
            <a href="/mapel/index">Mata Pelajaran</a>
            <a href="/mengajar/index">Mengajar</a>                
            @else
                <a href="/nilai/index">Nilai</a>
            @endif
            <a href="logout">Logout</a>
        </b>
    </div>

    {{-- ----- CONTENT ----- --}}
    @yield('content')

    {{-- ----- FOOTER ----- --}}
    <center>
        <p>
            &copy; {{ date('Y') }} - UJIKOM LSP
        </p>
    </center>
</body>
</html>