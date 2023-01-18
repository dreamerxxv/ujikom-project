@extends('main.layout')

@section('content')
    <center>
        <b>
            <h2>Tambah Data</h2>

            <form action="/kelas/store" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Kelas</td>
                    <td class="bar">
                        <input type="text" name="nama_kelas" placeholder="Nama kelas">
                    </td>
                </tr>

                <tr>
                    <td class="bar">Jurusan</td>
                    <td class="bar">
                        <select name="jurusan_id">
                            @foreach ($jurusan as $j)
                                <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit">Send</button></center>
                    </td>
                </tr>
            </table>
            </form>
        </b>
    </center>
@endsection