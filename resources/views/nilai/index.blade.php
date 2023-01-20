@extends('main/layout')
@section('content')
    <center>
        <b>
            <h2>List Data nilai</h2>
            @if(session('user')->role == 'guru')
            <a href="/nilai/create" class="button-primary">Tambah Data</a><br>
            @endif

            @if(session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if(session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>Nama Guru</th>
                    <th>Siswa</th>
                    <th>UH</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>NA</th>
                    @if(session('user')->role == 'guru')
                    <th>Action</th>
                    @endif
                </tr>

                @foreach ($nilai as $n)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n->mengajar->guru->nama_guru }}</td>
                    <td>{{ $n->siswa->nama_siswa }}</td>
                    <td>{{ $n->uh }}</td>
                    <td>{{ $n->uts }}</td>
                    <td>{{ $n->uas }}</td>
                    <td>{{ $n->na }}</td>

                    @if(session('user')->role == 'guru')
                    <td>
                        <a href="/nilai/edit/{{ $n->id }}" class="button-warning">Edit</a>
                        <a href="/nilai/destroy/{{ $n->id }}" class="button-danger" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection