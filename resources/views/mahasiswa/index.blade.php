@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Daftar Mahasiswa</h3>
    
    <table>
        <tr>
            <td>NIM</td>
            <td>JURUSAN</td>
            <td>ALAMAT</td>
            <td>NAMA</td>
        </tr>
        @foreach($rows as $row)
        <form action="{{ url('mahasiswa/' . $row->mhsw_id) }}" method="post">
        <tr>
            <td>{{ $row->mhsw_nim }}</td>
            <td>{{ $row->mhsw_nama }}</td>
            <td>{{ $row->mhsw_jurusan }}</td>
            <td>{{ $row->mhsw_alamat }}</td>
            <td><a href="{{ url('mahasiswa/' . $row->mhsw_id . '/edit') }}">Edit</a>
            
                <input name="_method" type="hidden" value="DELETE">
                @csrf
                <button>HAPUS</button>
            
            </td>
            </form>
        </tr>
        @endforeach
    </table>
    
    <a href="{{ url('mahasiswa/create') }}">Tambah Data</a>
</div>

@endsection