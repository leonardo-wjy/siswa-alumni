@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Daftar Siswa/Alumni</h1>

    <form method="GET" action="{{ route('students.index') }}" class="row g-2 mb-3">
        <div class="col-md-2">
            <input type="text" name="nis" value="{{ request('nis') }}" class="form-control" placeholder="NIS">
        </div>
        <div class="col-md-3">
            <input type="text" name="nama" value="{{ request('nama') }}" class="form-control" placeholder="Nama">
        </div>
        <div class="col-md-2">
            <input type="text" name="gender" value="{{ request('gender') }}" class="form-control" placeholder="Gender">
        </div>
        <div class="col-md-2">
            <input type="text" name="nama_perusahaan" value="{{ request('nama_perusahaan') }}" class="form-control" placeholder="Perusahaan">
        </div>
        <div class="col-md-1">
            <button class="btn btn-primary">Filter</button>
        </div>
        <div class="col-md-2 text-end">
            <a href="{{ route('students.export.excel', request()->query()) }}" class="btn btn-success">Export Excel</a>
        </div>
    </form>

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-2">Tambah Data</a>

    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIS</th><th>Nama</th><th>Gender</th><th>Domisili</th><th>Email</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $s)
            <tr>
                <td>{{ $s->nis }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->gender }}</td>
                <td>{{ $s->domisili }}</td>
                <td>{{ $s->email }}</td>
                <td>
                    <a href="{{ route('students.edit',$s) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a target="_blank" href="{{ route('students.export.pdf', $s) }}" class="btn btn-sm btn-info">CV PDF</a>

                    <form action="{{ route('students.destroy',$s) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6">Tidak ada data</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $students->links() }}
</div>
@endsection
