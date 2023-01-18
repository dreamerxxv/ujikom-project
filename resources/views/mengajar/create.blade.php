@extends('main.layout')

@section('content')
    <center>
        <b>
            <h2>Tambah Data Mengajar</h2>

            <form action="/mengajar/store" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Guru</td>
                    <td class="bar">
                        <select name="guru_id">
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="bar">Mapel</td>
                    <td class="bar">
                        <select name="mapel_id">
                            @foreach ($mapel as $m)
                                <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="bar">Kelas</td>
                    <td class="bar">
                        <select name="kelas_id">
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
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