<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluarModel extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar';
    protected $primaryKey = 'no_keluar';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['no_keluar', 'tanggal_keluar', 'kode_keluar', 'ditujukan', 'perihal_keluar', 'surat_keluar', 'keterangan_keluar'];
    protected $casts = [
        'tanggal_keluar' => 'date',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
