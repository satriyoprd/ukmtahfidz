<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setoran extends Model
{
    use HasFactory;

    protected $table = 'setoran';
    protected $primaryKey = 'id_setoran'; 
    public $timestamps = false;


    protected $fillable = [
        'tgl_setoran',
        'nama_santri',
        'surat',
        'jumlah_hafalan',
        'nilai',
        'catatan',
    ];
}
