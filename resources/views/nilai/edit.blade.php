@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Edit Data nilai</h2>

            <form action="/nilai/update/{{ $nilai->id }}" method="POST">
                @csrf
                <table width="50%">

                    <tr>
                        <td class="bar">ID Mengajar</td>
                        {{-- <td class="bar">
                            <input type="text" name="guru_id" value="{{ $nilai->guru_id }}">
                        </td> --}}
                    </tr>

                    <tr>
                        <td class="bar">ID Siswa</td>
                        {{-- <td class="bar">
                            <input type="text" name="mapel_id" value="{{ $nilai->mapel_id }}">
                        </td> --}}
                    </tr>

                    <tr>
                        <td class="bar">UH</td>
                        {{-- <td class="bar">
                            <input type="text" name="kelas_id" value="{{ $nilai->kelas_id }}">
                        </td> --}}
                    </tr>

                    <tr>
                        <td class="bar">UTS</td>
                        {{-- <td class="bar">
                            <input type="text" name="kelas_id" value="{{ $nilai->kelas_id }}">
                        </td> --}}
                    </tr>

                    <tr>
                        <td class="bar">UAS</td>
                        {{-- <td class="bar">
                            <input type="text" name="kelas_id" value="{{ $nilai->kelas_id }}">
                        </td> --}}
                    </tr>

                    <tr>
                        <td class="bar">NA</td>
                        {{-- <td class="bar">
                            <input type="text" name="kelas_id" value="{{ $nilai->kelas_id }}">
                        </td> --}}
                    </tr>
                    
                </table>
                </form>
            </b>
        </b>
    </center>
@endsection