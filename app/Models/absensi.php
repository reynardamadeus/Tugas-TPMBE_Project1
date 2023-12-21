<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'NIM', 'BNCCID', 'absensi_Date', 'image', 'Kelas_id'];

    public function absen()
    {
        return $this -> belongsTo(Kelas::class, 'Kelas_id');
    }
}
