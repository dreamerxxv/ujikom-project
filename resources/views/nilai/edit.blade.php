@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Edit Data nilai</h2>

            <form action="/nilai/update/{{ $nilai->id }}" method="POST">
                @csrf
                <table width="50%">

                    <tr>
                        <td class="bar">Mengajar</td>
                        <td class="bar">
                            <select name="mengajar_id">
                                @foreach($mengajar as $m)
                                @if($nilai->mengajar_id == $m->id)
                                    <option value="{{ $m->id }}" selected>{{ $m->guru->nama_guru }} {{ $m->mapel->nama_mapel }}</option>
                                @endif
                                    <option value="{{ $m->id }}">{{ $m->guru->nama_guru }} {{ $m->mapel->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">Siswa</td>
                        <td class="bar">
                            <select name="siswa_id">
                            @foreach($siswa as $s)
                            @if($nilai->siswa_id == $s->id)
                                <option value="{{ $s->id }}" selected>{{ $s->siswa->nama_siswa }}</option>
                            @endif
                                <option value="{{ $s->id }}">{{ $s->siswa->nama_siswa }}</option>
                            @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">UH</td>
                        <td class="bar">
                            <input type="text" name="uh" value="{{ $nilai->uh }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">UTS</td>
                        <td class="bar">
                            <input type="text" name="uts" value="{{ $nilai->uts }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">UAS</td>
                        <td class="bar">
                            <input type="text" name="uas" value="{{ $nilai->uas }}">
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