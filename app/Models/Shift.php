<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $table = 'shifts';


    public function pegawais()
    {
        return $this->hasMany('App\Models\Pegawai');
    }
}
