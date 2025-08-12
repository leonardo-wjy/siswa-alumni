<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF; // barryvdh

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::query();

        // filter: loop through allowed filters
        $filters = [
            'nis', 'nama', 'gender', 'status', 'nama_perusahaan', 'tahun', 'email', 'domisili',
            'nama_sekolah', 'tahun_masuksekolah'
        ];

        foreach ($filters as $f) {
            if ($value = $request->input($f)) {
                // flexible: partial match for strings, exact for numeric
                if (in_array($f, ['tahun','tahun_masuksekolah','tahun_masukaperusahaan'])) {
                    $query->where($f, $value);
                } else {
                    $query->where($f, 'like', "%$value%");
                }
            }
        }

        // sorting & pagination
        $perPage = $request->input('per_page', 15);
        $students = $query->orderBy('id','desc')->paginate($perPage)->appends($request->query());

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'nikah' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'umur' => 'required|integer|min:0',
            'kewarganegaraan' => 'required|string|max:255',
            'bahasa' => 'required|string|max:255',
            'domisili' => 'required|string|max:255',
            'nomor' => 'required|numeric',
            'email' => 'required|email|max:255',
            'tinggi_badan' => 'required|integer|min:0',
            'berat_badan' => 'required|integer|min:0',
            'ukuran_sepatu' => 'required|integer|min:0',
            'agama' => 'required|string|max:255',
            'kelebihan' => 'required|string',
            'kekurangan' => 'required|string',
            'promosi' => 'required|string|max:255',
            'tinggal_jp' => 'required|string|max:255',
            'keterangan_tinggal_jp' => 'required|string|max:255',
            'nama_sekolah' => 'required|string|max:255',
            'tahun_masuksekolah' => 'required|integer',
            'bulan__masuksekolah' => 'required|string|max:255',
            'status_sekolah' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'created_by' => 'required|string|max:255',
            // Opsional
            'nama_perusahaan' => 'nullable|string|max:255',
            'tahun_masukaperusahaan' => 'nullable|integer',
            'bulan_masukaperusahaan' => 'nullable|string|max:255',
            'nama_certif' => 'nullable|string|max:255',
            'tahun' => 'nullable|integer',
            'bulan' => 'nullable|string|max:255',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Data berhasil ditambahkan');
    }



    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'updated_by' => 'required|string|max:255',
            'nis' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'gender' => 'required',
            'nikah' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'umur' => 'required|numeric|min:0',
            'kewarganegaraan' => 'required|string|max:255',
            'bahasa' => 'required|string|max:255',
            'domisili' => 'required|string|max:255',
            'nomor' => 'required|numeric|min:0',
            'email' => 'required|email|max:255',
            'tinggi_badan' => 'required|numeric|min:0',
            'berat_badan' => 'required|numeric|min:0',
            'ukuran_sepatu' => 'required|numeric|min:0',
            'agama' => 'required|string|max:255',
            'kelebihan' => 'required|string',
            'kekurangan' => 'required|string',
            'promosi' => 'required|string|max:255',
            'tinggal_jp' => 'required|string|max:255',
            'keterangan_tinggal_jp' => 'required|string|max:255',
            'nama_sekolah' => 'required|string|max:255',
            'tahun_masuksekolah' => 'required|numeric',
            'bulan__masuksekolah' => 'required|string|max:255',
            'status_sekolah' => 'required|string|max:255',
            'nama_perusahaan' => 'nullable|string|max:255',
            'tahun_masukaperusahaan' => 'nullable|numeric',
            'bulan_masukaperusahaan' => 'nullable|string|max:255',
            'status' => 'required|string|max:255',
            'nama_certif' => 'nullable|string|max:255',
            'tahun' => 'nullable|numeric',
            'bulan' => 'nullable|string|max:255',
            'updated_by' => 'required|string|max:255',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success','Data dihapus.');
    }

    // Export Excel: only hasil filter
    public function exportExcel(Request $request)
    {
        $filters = $request->only(['gender', 'status']); // filter dari form
        $filename = 'data_siswa_' . date('Y-m-d') . '.xlsx';

        return Excel::download(new StudentsExport($filters), $filename);
    }

    // Export PDF CV for a single student (atau batch? soal minta CV per data -> kita buat single)
    public function exportPdf(Student $student)
    {
        $pdf = PDF::loadView('students.cv', compact('student'));
        $pdf->setOptions([
            'defaultFont' => 'ipagothic',
            'isRemoteEnabled' => true,      // Penting, supaya Dompdf bisa load gambar via URL HTTP
        ]);
        $fileName = 'cv_'.$student->nis.'_'.$student->nama.'.pdf';
        return $pdf->stream($fileName);
    }
}
