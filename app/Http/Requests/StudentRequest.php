<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function authorize() { return true; }

    public function rules()
    {
        return [
            'nis' => 'required|string|max:255|unique:students,nis,' . $this->route('student'),
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'tinggi_badan' => 'nullable|integer|min:0',
            'berat_badan' => 'nullable|integer|min:0',
            'ukuran_sepatu' => 'nullable|integer|min:0',
            'tahun_masuksekolah' => 'required|integer|min:1900|max:' . date('Y'),
            'tahun_masukaperusahaan' => 'nullable|integer|min:1900|max:' . date('Y'),
            'tahun' => 'nullable|integer|min:1900|max:' . date('Y'),
            // tambahkan rule lain sesuai kolom
        ];
    }

    public function messages()
    {
        return [
            'nis.required' => 'NIS wajib diisi.',
            'nama.required' => 'Nama wajib diisi.',
            // dsb
        ];
    }
}
