<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = ['nik', 'nama', 'telp', 'shift_id'];

    public function shitfs()
    {
        return $this->belongsTo('App\Models\Shift');
    }
}
