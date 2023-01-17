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

                {{-- <tr>
                    <td class="bar">Jurusan</td>
                    <td class="bar">
                        <input type="text" name="jurusan" placeholder="Jurusan">
                    </td>
                </tr> --}}

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