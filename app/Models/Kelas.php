<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = ['LNT_class'];

    public function absen()
    {
        return $this->hasMany(absensi::class);
    }
}
