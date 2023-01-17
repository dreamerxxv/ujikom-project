@extends('main/layout')
@section('content')
    <center>
        <b>
            <h2>List Data Jurusan</h2>

            <a href="/jurusan/create" class="button-primary">Tambah Data</a>
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>Nama Jurusan</th>
                    <th>Action</th>
                </tr>

                @foreach ($jurusan as $j)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $j->nama_jurusan }}</td>

                    <td>
                        <a href="/jurusan/edit/{{ $j->id }}" class="button-warning">Edit</a>
                        <a href="/jurusan/destroy/{{ $j->id }}" class="button-danger" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection