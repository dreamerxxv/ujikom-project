@extends('main/layout')
@section('content')
    <center>
        <b>
            <h2>List Data Mengajar</h2>

            <a href="/mengajar/create" class="button-primary">Tambah Data</a>
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>ID Guru</th>
                    <th>ID Mapel</th>
                    <th>ID Kelas</th>
                    <th>Action</th>
                </tr>

                @foreach ($mengajar as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->guru_id }}</td>
                    <td>{{ $m->mapel_id }}</td>
                    <td>{{ $m->kelas_id }}</td>

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