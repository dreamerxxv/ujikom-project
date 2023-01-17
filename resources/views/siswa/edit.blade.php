@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Edit Data siswa</h2>

            <form action="/siswa/update/{{ $siswa->id }}" method="POST">
                @csrf
                <table width="50%">

                    <tr>
                        <td class="bar">NIS</td>
                        <td class="bar">
                            <input type="text" name="nis" value="{{ $siswa->nis }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">Nama siswa</td>
                        <td class="bar">
                            <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">Jenis Kelamin</td>
                        <td class="bar">
                            <input type="radio" name="jk" value="L" value="{{ $guru->jk =='L' ? 'checked' : '' }}">Laki-Laki
                            <input type="radio" name="jk" value="P" value="{{ $guru->jk =='P' ? 'checked' : '' }}">Perempuan
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">Alamat</td>
                        <td class="bar">
                            <input type="text" name="alamat" value="{{ $siswa->alamat }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">ID Kelas</td>
                        <td class="bar">
                            <input type="text" name="kelas_id" value="{{ $siswa->kelas_id }}">
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