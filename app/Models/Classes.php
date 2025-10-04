<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'nama_kelas'
    ];
    public function Mahasiswa ()
    {
        return $this->hasMany(Mahasiswa :: class, 'kelas_id');

    }
}