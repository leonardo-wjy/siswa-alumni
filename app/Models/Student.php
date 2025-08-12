<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $guarded = ['id'];
    protected $dates = ['tanggal_lahir', 'created_at', 'updated_at'];

    // jika ingin accessor untuk umur otomatis:
    public function getAgeAttribute()
    {
        return $this->tanggal_lahir ? $this->tanggal_lahir->age : null;
    }
}
