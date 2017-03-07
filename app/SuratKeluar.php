<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $fillable = [
        'no_agenda', 'kode', 'tujuan', 'no_surat', 'tgl_surat', 'isi_ringkas', 'keterangan',
    ];
}
