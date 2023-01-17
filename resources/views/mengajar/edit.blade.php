@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Edit Data mengajar</h2>

            <form action="/mengajar/update/{{ $mengajar->id }}" method="POST">
                @csrf
                <table width="50%">

                    <tr>
                        <td class="bar">ID Guru</td>
                        {{-- <td class="bar">
                            <input type="text" name="guru_id" value="{{ $mengajar->guru_id }}">
                        </td> --}}
                    </tr>

                    <tr>
                        <td class="bar">ID Mapel</td>
                        {{-- <td class="bar">
                            <input type="text" name="mapel_id" value="{{ $mengajar->mapel_id }}">
                        </td> --}}
                    </tr>

                    <tr>
                        <td class="bar">ID Kelas</td>
                        {{-- <td class="bar">
                            <input type="text" name="kelas_id" value="{{ $mengajar->kelas_id }}">
                        </td> --}}
                    </tr>
                    
                </table>
                </form>
            </b>
        </b>
    </center>
@endsection