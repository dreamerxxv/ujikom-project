@extends('main.layout')

@section('content')
    <center>
        <b>
            <h2>Tambah Data</h2>

            <form action="/jurusan/store" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Jurusan</td>
                    <td class="bar">
                        <input type="text" name="nama_jurusan" placeholder="Nama Jurusan">
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