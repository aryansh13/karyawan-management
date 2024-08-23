<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cutis';

    protected $primaryKey = 'nomor_induk';

    protected $fillable = [
        'nomor_induk',
        'tanggal_cuti',
        'lama_cuti',
        'keterangan'
    ];

    public $timestamps = false;

    // Menonaktifkan auto-incrementing karena nomor_induk bukan integer
    public $incrementing = false;

    // Jika nomor_induk bukan integer, tambahkan ini
    protected $keyType = 'string';
}
