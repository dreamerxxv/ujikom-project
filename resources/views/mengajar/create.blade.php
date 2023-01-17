@extends('main.layout')

@section('content')
    <center>
        <b>
            <h2>Tambah Data Mengajar</h2>

            <form action="/mengajar/store" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">ID Guru</td>
                    {{-- <td class="bar">
                        <input type="text" name="nis" placeholder="NIS">
                    </td> --}}
                </tr>

                <tr>
                    <td class="bar">ID Mapel</td>
                    {{-- <td class="bar">
                        <input type="text" name="nis" placeholder="NIS">
                    </td> --}}
                </tr>

                <tr>
                    <td class="bar">ID Kelas</td>
                    {{-- <td class="bar">
                        <input type="text" name="nis" placeholder="NIS">
                    </td> --}}
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