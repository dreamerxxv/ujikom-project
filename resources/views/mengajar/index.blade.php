@extends('main/layout')
@section('content')
    <center>
        <b>
            <h2>List Data Mengajar</h2>

            <a href="/mengajar/create" class="button-primary">Tambah Data</a><br>
            @if(session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if(session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>Guru</th>
                    <th>Mapel</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>

                @foreach ($mengajar as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->guru->nama_guru }}</td>
                    <td>{{ $m->mapel->nama_mapel }}</td>
                    <td>{{ $m->kelas->nama_kelas }}</td>

                    <td>
                        <a href="/mengajar/edit/{{ $m->id }}" class="button-warning">Edit</a>
                        <a href="/mengajar/destroy/{{ $m->id }}" class="button-danger" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection