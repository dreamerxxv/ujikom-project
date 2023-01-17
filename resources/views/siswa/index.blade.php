@extends('main/layout')
@section('content')
    <center>
        <b>
            <h2>List Data Siswa</h2>

            <a href="/siswa/create" class="button-primary">Tambah Data</a>
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>

                @foreach ($siswa as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s->nis }}</td>
                    <td>{{ $s->nama_siswa }}</td>
                    <td>{{ $s->jenis_kelamin }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->kelas }}</td>

                    <td>
                        <a href="/siswa/edit/{{ $s->id }}" class="button-warning">Edit</a>
                        <a href="/siswa/destroy/{{ $s->id }}" class="button-danger" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection