@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->npm }}</td>
                <td>{{ $mahasiswa->kelas }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
