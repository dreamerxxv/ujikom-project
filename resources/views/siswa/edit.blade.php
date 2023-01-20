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
                            <select name="siswa_id">
                                @foreach($siswa as $s)
                                @if($nilai->siswa_id == $s->id)
                                    <option value="{{ $s->id }}" selected>{{ $s->nama_siswa }}</option>
                                @endif
                                    <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">Jenis Kelamin</td>
                        <td class="bar">
                            <input type="radio" name="jk" value="L" value="{{ $siswa->jk =='L' ? 'checked' : '' }}">Laki-Laki
                            <input type="radio" name="jk" value="P" value="{{ $siswa->jk =='P' ? 'checked' : '' }}">Perempuan
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">Alamat</td>
                        <td class="bar">
                            <input type="text" name="alamat" value="{{ $siswa->alamat }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">Kelas</td>
                        <td class="bar">
                            <select name="kelas_id">
                                @foreach($kelas as $k)
                                @if($siswa->kelas_id == $k->id)
                                    <option value="{{ $k->id }}" selected>{{ $k->nama_kelas }}</option>
                                @endif
                                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">Password</td>
                        <td class="bar">
                            <input type="password" name="password" value="{{ $siswa->password }}">
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