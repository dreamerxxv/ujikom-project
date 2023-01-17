@extends('main/layout')
@section('content')
    <center>
        <b>
            <h2>List Data Kelas</h2>

            <a href="/kelas/create" class="button-primary">Tambah Data</a>
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>Nama Kelas</th>
                    <th>ID Jurusan</th>
                    <th>Action</th>
                </tr>

                @foreach ($kelas as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->nama_kelas }}</td>
                    <td>{{ $k->jurusan_id }}</td>

                    <td>
                        <a href="/kelas/edit/{{ $k->id }}" class="button-warning">Edit</a>
                        <a href="/kelas/destroy/{{ $k->id }}" class="button-danger" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection