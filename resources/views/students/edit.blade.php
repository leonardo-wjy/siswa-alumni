@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- updated_by --}}
        <div class="mb-3">
            <label>Updated By</label>
            <input type="text" name="updated_by" value="{{ old('updated_by') }}" class="form-control @error('updated_by') is-invalid @enderror">
            @error('updated_by')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- NIS --}}
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ old('nis', $student->nis) }}" >
            @error('nis')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Nama --}}
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $student->nama) }}" >
            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Gender --}}
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" 
                name="gender" 
                id="gender" 
                class="form-control @error('gender') is-invalid @enderror" 
                value="{{ old('gender', $student->gender) }}" 
                >
            @error('gender')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Nikah --}}
        <div class="mb-3">
            <label for="nikah" class="form-label">Status Pernikahan</label>
            <input type="text" 
                name="nikah" 
                id="nikah" 
                class="form-control @error('nikah') is-invalid @enderror" 
                value="{{ old('nikah', $student->nikah) }}" 
                >
            @error('nikah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>


        {{-- Tanggal Lahir --}}
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" 
                name="tanggal_lahir" 
                id="tanggal_lahir" 
                class="form-control @error('tanggal_lahir') is-invalid @enderror" 
                value="{{ old('tanggal_lahir', \Carbon\Carbon::parse($student->tanggal_lahir)->format('Y-m-d')) }}" 
                >
            @error('tanggal_lahir')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>


        {{-- Umur --}}
        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="number" name="umur" id="umur" class="form-control @error('umur') is-invalid @enderror" min="0" value="{{ old('umur', $student->umur) }}" >
            @error('umur')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Kewarganegaraan --}}
        <div class="mb-3">
            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
            <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror" value="{{ old('kewarganegaraan', $student->kewarganegaraan) }}" >
            @error('kewarganegaraan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Bahasa --}}
        <div class="mb-3">
            <label for="bahasa" class="form-label">Bahasa</label>
            <input type="text" name="bahasa" id="bahasa" class="form-control @error('bahasa') is-invalid @enderror" value="{{ old('bahasa', $student->bahasa) }}" >
            @error('bahasa')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Domisili --}}
        <div class="mb-3">
            <label for="domisili" class="form-label">Domisili</label>
            <input type="text" name="domisili" id="domisili" class="form-control @error('domisili') is-invalid @enderror" value="{{ old('domisili', $student->domisili) }}" >
            @error('domisili')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Nomor HP --}}
        <div class="mb-3">
            <label for="nomor" class="form-label">Nomor HP</label>
            <input type="text" name="nomor" value="{{ old('nomor', $student->nomor) }}" class="form-control @error('nomor') is-invalid @enderror" value="{{ old('nomor', $student->nomor) }}" >
            @error('nomor')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $student->email) }}" >
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Tinggi Badan --}}
        <div class="mb-3">
            <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
            <input type="number" name="tinggi_badan" id="tinggi_badan" class="form-control @error('tinggi_badan') is-invalid @enderror" min="0" value="{{ old('tinggi_badan', $student->tinggi_badan) }}" >
            @error('tinggi_badan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Berat Badan --}}
        <div class="mb-3">
            <label for="berat_badan" class="form-label">Berat Badan (kg)</label>
            <input type="number" name="berat_badan" id="berat_badan" class="form-control @error('berat_badan') is-invalid @enderror" min="0" value="{{ old('berat_badan', $student->berat_badan) }}" >
            @error('berat_badan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Ukuran Sepatu --}}
        <div class="mb-3">
            <label for="ukuran_sepatu" class="form-label">Ukuran Sepatu</label>
            <input type="number" name="ukuran_sepatu" id="ukuran_sepatu" class="form-control @error('ukuran_sepatu') is-invalid @enderror" min="0" value="{{ old('ukuran_sepatu', $student->ukuran_sepatu) }}" >
            @error('ukuran_sepatu')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Agama --}}
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror" value="{{ old('agama', $student->agama) }}" >
            @error('agama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Kelebihan --}}
        <div class="mb-3">
            <label for="kelebihan" class="form-label">Kelebihan</label>
            <textarea name="kelebihan" id="kelebihan" class="form-control @error('kelebihan') is-invalid @enderror" >{{ old('kelebihan', $student->kelebihan) }}</textarea>
            @error('kelebihan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Kekurangan --}}
        <div class="mb-3">
            <label for="kekurangan" class="form-label">Kekurangan</label>
            <textarea name="kekurangan" id="kekurangan" class="form-control @error('kekurangan') is-invalid @enderror" >{{ old('kekurangan', $student->kekurangan) }}</textarea>
            @error('kekurangan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Promosi --}}
        <div class="mb-3">
            <label for="promosi" class="form-label">Promosi</label>
            <input type="text" name="promosi" id="promosi" class="form-control @error('promosi') is-invalid @enderror" value="{{ old('promosi', $student->promosi) }}" >
            @error('promosi')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Tinggal JP --}}
        <div class="mb-3">
            <label for="tinggal_jp" class="form-label">Tinggal JP</label>
            <input type="text" name="tinggal_jp" id="tinggal_jp" class="form-control @error('tinggal_jp') is-invalid @enderror" value="{{ old('tinggal_jp', $student->tinggal_jp) }}" >
            @error('tinggal_jp')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Keterangan Tinggal JP --}}
        <div class="mb-3">
            <label for="keterangan_tinggal_jp" class="form-label">Keterangan Tinggal JP</label>
            <input type="text" name="keterangan_tinggal_jp" id="keterangan_tinggal_jp" class="form-control @error('keterangan_tinggal_jp') is-invalid @enderror" value="{{ old('keterangan_tinggal_jp', $student->keterangan_tinggal_jp) }}" >
            @error('keterangan_tinggal_jp')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Nama Sekolah --}}
        <div class="mb-3">
            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror" value="{{ old('nama_sekolah', $student->nama_sekolah) }}" >
            @error('nama_sekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Tahun Masuk Sekolah --}}
        <div class="mb-3">
            <label for="tahun_masuksekolah" class="form-label">Tahun Masuk Sekolah</label>
            <input type="number" name="tahun_masuksekolah" id="tahun_masuksekolah" class="form-control @error('tahun_masuksekolah') is-invalid @enderror" min="1900" max="{{ date('Y') }}" value="{{ old('tahun_masuksekolah', $student->tahun_masuksekolah) }}" >
            @error('tahun_masuksekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Bulan Masuk Sekolah --}}
        <div class="mb-3">
            <label for="bulan__masuksekolah" class="form-label">Bulan Masuk Sekolah</label>
            <input type="text" name="bulan__masuksekolah" id="bulan__masuksekolah" class="form-control @error('bulan__masuksekolah') is-invalid @enderror" value="{{ old('bulan__masuksekolah', $student->bulan__masuksekolah) }}" >
            @error('bulan__masuksekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Status Sekolah --}}
        <div class="mb-3">
            <label for="status_sekolah" class="form-label">Status Sekolah</label>
            <input type="text" name="status_sekolah" id="status_sekolah" class="form-control @error('status_sekolah') is-invalid @enderror" value="{{ old('status_sekolah', $student->status_sekolah) }}" >
            @error('status_sekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Nama Perusahaan --}}
        <div class="mb-3">
            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" value="{{ old('nama_perusahaan', $student->nama_perusahaan) }}">
            @error('nama_perusahaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Tahun Masuk Perusahaan --}}
        <div class="mb-3">
            <label for="tahun_masukaperusahaan" class="form-label">Tahun Masuk Perusahaan</label>
            <input type="number" name="tahun_masukaperusahaan" id="tahun_masukaperusahaan" class="form-control @error('tahun_masukaperusahaan') is-invalid @enderror" value="{{ old('tahun_masukaperusahaan', $student->tahun_masukaperusahaan) }}">
            @error('tahun_masukaperusahaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Bulan Masuk Perusahaan --}}
        <div class="mb-3">
            <label for="bulan_masukaperusahaan" class="form-label">Bulan Masuk Perusahaan</label>
            <input type="text" name="bulan_masukaperusahaan" id="bulan_masukaperusahaan" class="form-control @error('bulan_masukaperusahaan') is-invalid @enderror" value="{{ old('bulan_masukaperusahaan', $student->bulan_masukaperusahaan) }}">
            @error('bulan_masukaperusahaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Status --}}
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $student->status) }}" >
            @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Nama Certif --}}
        <div class="mb-3">
            <label for="nama_certif" class="form-label">Nama Sertifikat</label>
            <input type="text" name="nama_certif" id="nama_certif" class="form-control @error('nama_certif') is-invalid @enderror" value="{{ old('nama_certif', $student->nama_certif) }}">
            @error('nama_certif')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Tahun --}}
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun Sertifikat</label>
            <input type="number" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun', $student->tahun) }}">
            @error('tahun')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        {{-- Bulan --}}
        <div class="mb-3">
            <label for="bulan" class="form-label">Bulan Sertifikat</label>
            <input type="text" name="bulan" id="bulan" class="form-control @error('bulan') is-invalid @enderror" value="{{ old('bulan', $student->bulan) }}">
            @error('bulan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
