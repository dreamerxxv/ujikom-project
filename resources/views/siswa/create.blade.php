@extends('main.layout')

@section('content')
    <center>
        <b>
            <h2>Tambah Data Siswa</h2>

            <form action="/siswa/store" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIS</td>
                    <td class="bar">
                        <input type="text" name="nis" placeholder="NIS">
                    </td>
                </tr>

                <tr>
                    <td class="bar">Nama Siswa</td>
                    <td class="bar">
                        <input type="text" name="nama_siswa" placeholder="Nama siswa">
                    </td>
                </tr>

                <tr>
                    <td class="bar">Jenis Kelamin</td>
                    <td class="bar">
                        <input type="radio" name="jk" value="L">Laki-Laki
                        <input type="radio" name="jk" value="P">Perempuan
                    </td>
                </tr>

                <tr>
                    <td class="bar">Alamat</td>
                    <td class="bar">
                        <input type="text" name="alamat" placeholder="Alamat">
                    </td>
                </tr>

                <tr>
                    <td class="bar">ID Kelas</td>
                    <td class="bar">
                        <input type="text" name="kelas_id" placeholder="ID Kelas">
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