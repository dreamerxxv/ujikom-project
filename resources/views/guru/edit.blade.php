@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Edit Data Guru</h2>

            <form action="/guru/update/{{ $guru->id }}" method="POST">
                @csrf
                <table width="50%">
                    <tr>
                        <td class="bar">NIP</td>
                        <td class="bar">
                            <input type="text" name="nip" value="{{ $guru->nip }}">
                        </td>
                    </tr>
    
                    <tr>
                        <td class="bar">Nama Guru</td>
                        <td class="bar">
                            <input type="text" name="nama_guru" value="{{ $guru->nama_guru }}">
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
                            <input type="text" name="alamat" value="{{ $guru->alamat }}">
                        </td>
                    </tr>
    
                    <tr>
                        <td class="bar">Password</td>
                        <td class="bar">
                            <input type="text" name="password" value="{{ $guru->password }}">
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