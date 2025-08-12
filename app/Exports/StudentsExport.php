<?php
namespace App\Exports;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    protected $filters;
    public function __construct($filters = []) { $this->filters = $filters; }

    public function collection()
    {
        $q = Student::query();

        foreach ($this->filters as $k => $v) {
            if($v === null || $v === '') continue;
            if(in_array($k, ['tahun','tahun_masuksekolah','tahun_masukaperusahaan'])) {
                $q->where($k, $v);
            } else {
                $q->where($k, 'like', "%$v%");
            }
        }

        // pilih semua kolom yang ingin diexport atau semua
        return $q->get([
            'id','created_at','updated_at','created_by','updated_by','nis','nama','gender','nikah','tanggal_lahir','umur','kewarganegaraan','bahasa','domisili','nomor','email','tinggi_badan','berat_badan','ukuran_sepatu','agama','kelebihan','kekurangan','promosi','tinggal_jp','keterangan_tinggal_jp','nama_sekolah','tahun_masuksekolah','bulan__masuksekolah','status_sekolah','nama_perusahaan','tahun_masukaperusahaan','bulan_masukaperusahaan','status','nama_certif','tahun','bulan'
        ]);
    }

    public function headings(): array
    {
        return [
            'id','created_at','updated_at','created_by','updated_by','nis','nama','gender','nikah','tanggal_lahir','umur','kewarganegaraan','bahasa','domisili','nomor','email','tinggi_badan','berat_badan','ukuran_sepatu','agama','kelebihan','kekurangan','promosi','tinggal_jp','keterangan_tinggal_jp','nama_sekolah','tahun_masuksekolah','bulan__masuksekolah','status_sekolah','nama_perusahaan','tahun_masukaperusahaan','bulan_masukaperusahaan','status','nama_certif','tahun','bulan'
        ];
    }
}
