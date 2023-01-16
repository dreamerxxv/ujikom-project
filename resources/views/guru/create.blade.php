@extends('main.layout')

@section('content')
    <center>
        <b>
            <h2>Tambah Data</h2>

            <form action="/guru/store" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIP</td>
                    <td class="bar">
                        <input type="text" name="nip" placeholder="Nomor NIP">
                    </td>
                </tr>

                <tr>
                    <td class="bar">Nama Guru</td>
                    <td class="bar">
                        <input type="text" name="nama_guru" placeholder="Nama Lengkap">
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
                        <input type="text" name="alamat" placeholder="Alamat Rumah">
                    </td>
                </tr>

                <tr>
                    <td class="bar">Password</td>
                    <td class="bar">
                        <input type="password" name="password">
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