@extends('main.layout')

@section('content')
    <center>
        <b>
            <h2>Tambah Data Nilai</h2>

            <form action="/nilai/store" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">ID Mengajar</td>
                    {{-- <td class="bar">
                        <input type="text" name="nis" placeholder="NIS">
                    </td> --}}
                </tr>

                <tr>
                    <td class="bar">ID Siswa</td>
                    {{-- <td class="bar">
                        <input type="text" name="nis" placeholder="NIS">
                    </td> --}}
                </tr>

                <tr>
                    <td class="bar">UH</td>
                    {{-- <td class="bar">
                        <input type="text" name="nis" placeholder="NIS">
                    </td> --}}
                </tr>

                <tr>
                    <td class="bar">UTS</td>
                    {{-- <td class="bar">
                        <input type="text" name="nis" placeholder="NIS">
                    </td> --}}
                </tr>

                <tr>
                    <td class="bar">UAS</td>
                    {{-- <td class="bar">
                        <input type="text" name="nis" placeholder="NIS">
                    </td> --}}
                </tr>

                <tr>
                    <td class="bar">NA</td>
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