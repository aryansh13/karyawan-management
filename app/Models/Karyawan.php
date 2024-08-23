<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';

    protected $primaryKey = 'nomor_induk';

    protected $fillable = [
        'nomor_induk',
        'nama',
        'alamat',
        'tanggal_lahir',
        'tanggal_bergabung',
    ];

    public $timestamps = false;

    // Menonaktifkan auto-incrementing karena nomor_induk bukan integer
    public $incrementing = false;

    // Jika nomor_induk bukan integer, tambahkan ini
    protected $keyType = 'string';
}
