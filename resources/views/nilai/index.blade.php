@extends('main/layout')
@section('content')
    <center>
        <b>
            <h2>List Data nilai</h2>

            <a href="/nilai/create" class="button-primary">Tambah Data</a>
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>ID nilai</th>
                    <th>ID Siswa</th>
                    <th>UH</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>NA</th>
                    <th>Action</th>
                </tr>

                @foreach ($nilai as $n)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n->nilai_id }}</td>
                    <td>{{ $n->siswa_id }}</td>
                    <td>{{ $n->uh }}</td>
                    <td>{{ $n->uts }}</td>
                    <td>{{ $n->uas }}</td>
                    <td>{{ $n->na }}</td>

                    <td>
                        <a href="/nilai/edit/{{ $n->id }}" class="button-warning">Edit</a>
                        <a href="/nilai/destroy/{{ $n->id }}" class="button-danger" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection