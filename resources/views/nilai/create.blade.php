@extends('main.layout')

@section('content')
    <center>
        <b>
            <h2>Tambah Data Nilai</h2>

            <form action="/nilai/store" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Mengajar</td>
                    <td class="bar">
                        <select name="mengajar_id">
                            @foreach ($mengajar as $m)
                                <option value="{{ $m->id }}">{{ $m->guru->nama_guru }} {{ $m->mapel->nama_mapel }} {{ $m->kelas->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="bar">Siswa</td>
                    <td class="bar">
                        <select name="siswa_id">
                            @foreach ($siswa as $s)
                                <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="bar">UH</td>
                    <td class="bar">
                        <input type="text" name="uh" placeholder="Nilai UH">
                    </td>
                </tr>

                <tr>
                    <td class="bar">UTS</td>
                    <td class="bar">
                        <input type="text" name="uts" placeholder="Nilai UTS">
                    </td>
                </tr>

                <tr>
                    <td class="bar">UAS</td>
                    <td class="bar">
                        <input type="text" name="uas" placeholder="Nilai UAS">
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