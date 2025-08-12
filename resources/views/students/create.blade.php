@extends('layouts.app')

@section('title', 'Tambah Data Siswa/Alumni')

@section('content')
<div class="container mt-4">
    <h2>Tambah Data Siswa / Alumni</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        {{-- created_by --}}
        <div class="mb-3">
            <label>Created By</label>
            <input type="text" name="created_by" value="{{ old('created_by') }}" class="form-control @error('created_by') is-invalid @enderror">
            @error('created_by')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- nis --}}
        <div class="mb-3">
            <label>NIS</label>
            <input type="text" name="nis" value="{{ old('nis') }}" class="form-control @error('nis') is-invalid @enderror">
            @error('nis')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- nama --}}
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- gender --}}
        <div class="mb-3">
            <label>Gender</label>
            <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                <option value="">Pilih</option>
                <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('gender')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- nikah --}}
        <div class="mb-3">
            <label>Status Pernikahan</label>
            <input type="text" name="nikah" value="{{ old('nikah') }}" class="form-control @error('nikah') is-invalid @enderror">
            @error('nikah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- tanggal_lahir --}}
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="form-control @error('tanggal_lahir') is-invalid @enderror">
            @error('tanggal_lahir')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- umur --}}
        <div class="mb-3">
            <label>Umur</label>
            <input type="text" name="umur" value="{{ old('umur') }}" class="form-control @error('umur') is-invalid @enderror">
            @error('umur')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- kewarganegaraan --}}
        <div class="mb-3">
            <label>Kewarganegaraan</label>
            <input type="text" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}" class="form-control @error('kewarganegaraan') is-invalid @enderror">
            @error('kewarganegaraan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- bahasa --}}
        <div class="mb-3">
            <label>Bahasa</label>
            <input type="text" name="bahasa" value="{{ old('bahasa') }}" class="form-control @error('bahasa') is-invalid @enderror">
            @error('bahasa')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- domisili --}}
        <div class="mb-3">
            <label>Domisili</label>
            <input type="text" name="domisili" value="{{ old('domisili') }}" class="form-control @error('domisili') is-invalid @enderror">
            @error('domisili')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- nomor --}}
        <div class="mb-3">
            <label>Nomor HP</label>
            <input type="text" name="nomor" value="{{ old('nomor') }}" class="form-control @error('nomor') is-invalid @enderror">
            @error('nomor')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- email --}}
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- tinggi_badan --}}
        <div class="mb-3">
            <label>Tinggi Badan</label>
            <input type="number" name="tinggi_badan" value="{{ old('tinggi_badan') }}" class="form-control @error('tinggi_badan') is-invalid @enderror">
            @error('tinggi_badan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- berat_badan --}}
        <div class="mb-3">
            <label>Berat Badan</label>
            <input type="number" name="berat_badan" value="{{ old('berat_badan') }}" class="form-control @error('berat_badan') is-invalid @enderror">
            @error('berat_badan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- ukuran_sepatu --}}
        <div class="mb-3">
            <label>Ukuran Sepatu</label>
            <input type="number" name="ukuran_sepatu" value="{{ old('ukuran_sepatu') }}" class="form-control @error('ukuran_sepatu') is-invalid @enderror">
            @error('ukuran_sepatu')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- agama --}}
        <div class="mb-3">
            <label>Agama</label>
            <input type="text" name="agama" value="{{ old('agama') }}" class="form-control @error('agama') is-invalid @enderror">
            @error('agama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- kelebihan --}}
        <div class="mb-3">
            <label>Kelebihan</label>
            <textarea name="kelebihan" class="form-control @error('kelebihan') is-invalid @enderror">{{ old('kelebihan') }}</textarea>
            @error('kelebihan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- kekurangan --}}
        <div class="mb-3">
            <label>Kekurangan</label>
            <textarea name="kekurangan" class="form-control @error('kekurangan') is-invalid @enderror">{{ old('kekurangan') }}</textarea>
            @error('kekurangan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- promosi --}}
        <div class="mb-3">
            <label>Promosi</label>
            <input type="text" name="promosi" value="{{ old('promosi') }}" class="form-control @error('promosi') is-invalid @enderror">
            @error('promosi')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- tinggal_jp --}}
        <div class="mb-3">
            <label>Tinggal JP</label>
            <input type="text" name="tinggal_jp" value="{{ old('tinggal_jp') }}" class="form-control @error('tinggal_jp') is-invalid @enderror">
            @error('tinggal_jp')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- keterangan_tinggal_jp --}}
        <div class="mb-3">
            <label>Keterangan Tinggal JP</label>
            <input type="text" name="keterangan_tinggal_jp" value="{{ old('keterangan_tinggal_jp') }}" class="form-control @error('keterangan_tinggal_jp') is-invalid @enderror">
            @error('keterangan_tinggal_jp')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- nama_sekolah --}}
        <div class="mb-3">
            <label>Nama Sekolah</label>
            <input type="text" name="nama_sekolah" value="{{ old('nama_sekolah') }}" class="form-control @error('nama_sekolah') is-invalid @enderror">
            @error('nama_sekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- tahun_masuksekolah --}}
        <div class="mb-3">
            <label>Tahun Masuk Sekolah</label>
            <input type="number" name="tahun_masuksekolah" value="{{ old('tahun_masuksekolah') }}" class="form-control @error('tahun_masuksekolah') is-invalid @enderror">
            @error('tahun_masuksekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- bulan__masuksekolah --}}
        <div class="mb-3">
            <label>Bulan Masuk Sekolah</label>
            <input type="text" name="bulan__masuksekolah" value="{{ old('bulan__masuksekolah') }}" class="form-control @error('bulan__masuksekolah') is-invalid @enderror">
            @error('bulan__masuksekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- status_sekolah --}}
        <div class="mb-3">
            <label>Status Sekolah</label>
            <input type="text" name="status_sekolah" value="{{ old('status_sekolah') }}" class="form-control @error('status_sekolah') is-invalid @enderror">
            @error('status_sekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- nama_perusahaan --}}
        <div class="mb-3">
            <label>Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" class="form-control @error('nama_perusahaan') is-invalid @enderror">
            @error('nama_perusahaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- tahun_masukaperusahaan --}}
        <div class="mb-3">
            <label>Tahun Masuk Perusahaan</label>
            <input type="number" name="tahun_masukaperusahaan" value="{{ old('tahun_masukaperusahaan') }}" class="form-control @error('tahun_masukaperusahaan') is-invalid @enderror">
            @error('tahun_masukaperusahaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- bulan_masukaperusahaan --}}
        <div class="mb-3">
            <label>Bulan Masuk Perusahaan</label>
            <input type="text" name="bulan_masukaperusahaan" value="{{ old('bulan_masukaperusahaan') }}" class="form-control @error('bulan_masukaperusahaan') is-invalid @enderror">
            @error('bulan_masukaperusahaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- status --}}
        <div class="mb-3">
            <label>Status</label>
            <input type="text" name="status" value="{{ old('status') }}" class="form-control @error('status') is-invalid @enderror">
            @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- nama_certif --}}
        <div class="mb-3">
            <label>Nama Sertifikat</label>
            <input type="text" name="nama_certif" value="{{ old('nama_certif') }}" class="form-control @error('nama_certif') is-invalid @enderror">
            @error('nama_certif')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- tahun --}}
        <div class="mb-3">
            <label>Tahun Sertifikat</label>
            <input type="number" name="tahun" value="{{ old('tahun') }}" class="form-control @error('tahun') is-invalid @enderror">
            @error('tahun')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- bulan --}}
        <div class="mb-3">
            <label>Bulan Sertifikat</label>
            <input type="text" name="bulan" value="{{ old('bulan') }}" class="form-control @error('bulan') is-invalid @enderror">
            @error('bulan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
