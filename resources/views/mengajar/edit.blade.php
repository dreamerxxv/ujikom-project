@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Edit Data mengajar</h2>

            <form action="/mengajar/update/{{ $mengajar->id }}" method="POST">
                @csrf
                <table width="50%">

                    <tr>
                        <td class="bar">Guru</td>
                        <td class="bar">
                            <select name="guru_id">
                                @foreach($guru as $g)
                                @if($mengajar->guru_id == $g->id)
                                    <option value="{{ $g->id }}" selected>{{ $g->nama_guru }}</option>
                                @endif
                                    <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">Mapel</td>
                        <td class="bar">
                            <select name="mapel_id">
                                @foreach($mapel as $m)
                                @if($mengajar->mapel_id == $m->id)
                                    <option value="{{ $m->id }}" selected>{{ $m->nama_mapel }}</option>
                                @endif
                                    <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                                @endforeach 
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="bar">Kelas</td>
                        <td class="bar">
                            <select name="kelas_id">
                                @foreach($kelas as $k)
                                @if($mengajar->kelas_id == $k->id)
                                    <option value="{{ $k->id }}" selected>{{ $k->nama_kelas }}</option>
                                @endif
                                    <option value="{{ $k-> id }}">{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
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
    </center>
@endsection