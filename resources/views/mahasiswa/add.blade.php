@extends('layouts.app') 
@section('content')
    <div class="container">
        <h3>Tambah Data Mahasiswa</h3>
        <form action="{{ url('/mahasiswa') }}" method="post"> 
            @csrf
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="mhsw_nim"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input type="text" name="mhsw_nama"></td>
                </tr>
                <tr>
                    <td>JURUSAN</td>
                    <td><input type="text" name="mhsw_jurusan"></td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><input type="text" name="mhsw_alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
            </table>
    </div>
@endsection
