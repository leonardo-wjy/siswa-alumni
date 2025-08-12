<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<style>
     @font-face {
            font-family: 'NotoSansCJKjp';
            src: url('assets/fonts/NotoSansCJKjp-Regular.ttf') format('truetype');
        }
        body {
            font-family: 'NotoSansCJKjp', 'DejaVu Sans', 'sans-serif'; font-size: 11px; }
    table { border-collapse: collapse; width: 100%; }
    td, th { border: 1px solid #000; padding: 4px; vertical-align: middle; }
    .title { font-weight: bold; text-align: center; font-size: 14px; }
    .photo { width: 120px; height: 160px; text-align: center; border: 1px solid #000; }
</style>
</head>
<body>

<!-- HEADER -->
<table>
    <tr>
        <td rowspan="2" style="width:15%; text-align:center;">
        @php
            $path = public_path('logo.png');
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        @endphp

        <img src="{{ $base64 }}" alt="Logo" />
        <td colspan="6" class="title">
            Curriculum Vitae Pekerja Asing Berketerampilan Khusus
        </td>
    </tr>
    <tr>
        <td colspan="6"></td>
    </tr>
</table>

<!-- IDENTITAS -->
<table>
    <tr>
        <td style="width:15%;">(Nama)</td>
        <td style="width:35%;">{{ $student->nama }}</td>
        <td style="width:15%;">(Tanggal Lahir)</td>
        <td style="width:20%;">{{ $student->tanggal_lahir }}</td>
        <td rowspan="5" class="photo">Photo</td>
    </tr>
    <tr>
        <td>(Gender)</td>
        <td>{{ $student->gender }}</td>
        <td>(Usia)</td>
        <td>{{ $student->umur }}</td>
    </tr>
    <tr>
        <td>(Kewarganegaraan)</td>
        <td>{{ $student->kewarganegaraan }}</td>
        <td>(Bahasa)</td>
        <td>{{ $student->bahasa }}</td>
    </tr>
    <tr>
        <td>(Domisili)</td>
        <td colspan="3">{{ $student->domisili }}</td>
    </tr>
    <tr>
        <td>(Kontak)</td>
        <td>No. Telp: {{ $student->nomor }}</td>
        <td>Email</td>
        <td>{{ $student->email }}</td>
    </tr>
</table>

<!-- PENDIDIKAN -->
<table>
    <tr>
        <th colspan="4">(Pendidikan)</th>
    </tr>
    <tr>
        <td style="width:10%;">(Tahun)</td>
        <td style="width:10%;">(Bulan)</td>
        <td style="width:50%;">(Nama Sekolah)</td>
        <td style="width:30%;">(Masuk/Lulus)</td>
    </tr>
    <tr>
        <td>{{ $student->tahun_masuksekolah }}</td>
        <td>{{ $student->bulan__masuksekolah }}</td>
        <td>{{ $student->nama_sekolah }}</td>
        <td>{{ $student->status_sekolah }}</td>
    </tr>
</table>

<!-- PENGALAMAN KERJA -->
<table>
    <tr>
        <th colspan="4">(Pengalaman Kerja)</th>
    </tr>
    <tr>
        <td style="width:10%;">(Tahun Kerja)</td>
        <td style="width:10%;">(Bulan Kerja)</td>
        <td style="width:50%;">(Tempat Bekerja)</td>
        <td style="width:30%;">(Status Kerja)</td>
    </tr>
    <tr>
        <td>{{ $student->tahun_masukaperusahaan }}</td>
        <td>{{ $student->bulan_masukaperusahaan }}</td>
        <td>{{ $student->nama_perusahaan }}</td>
        <td>{{ $student->status }}</td>
    </tr>
</table>

<!-- SERTIFIKASI -->
<table>
    <tr>
        <th colspan="4">(Sertifikat & Lisensi)</th>
    </tr>
    <tr>
        <td style="width:10%;">Tahun</td>
        <td style="width:10%;">Bulan</td>
        <td style="width:80%;" colspan="2">Nama</td>
    </tr>
    <tr>
        <td>{{ $student->tahun }}</td>
        <td>{{ $student->bulan }}</td>
        <td colspan="2">{{ $student->nama_certif }}</td>
    </tr>
</table>

<!-- INFORMASI TAMBAHAN -->
<table>
    <tr>
        <td style="width:20%;">(Hobi/Kemampuan)</td>
        <td>{{ $student->hobi }}</td>
    </tr>
    <tr>
        <td>(Kelebihan)</td>
        <td>{{ $student->kelebihan }}</td>
    </tr>
    <tr>
        <td>(Kekurangan)</td>
        <td>{{ $student->kekurangan }}</td>
    </tr>
    <tr>
        <td>(Promosi Diri)</td>
        <td>{{ $student->promosi }}</td>
    </tr>
    <tr>
        <td></td>
        <td>{{ $student->tinggi_badan }} cm / {{ $student->berat_badan }} kg / {{ $student->ukuran_sepatu }}</td>
    </tr>
</table>

</body>
</html>
