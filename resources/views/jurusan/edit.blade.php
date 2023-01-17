@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Edit Data Jurusan</h2>

            <form action="/jurusan/update/{{ $jurusan->id }}" method="POST">
                @csrf
                <table width="50%">
                    <tr>
                        <td class="bar">Nama jurusan</td>
                        <td class="bar">
                            <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><button class="button-primary" type="submit">Edit</button></center>
                        </td>
                    </tr>
                </table>
                </form>
            </b>
        </b>
    </center>
@endsection