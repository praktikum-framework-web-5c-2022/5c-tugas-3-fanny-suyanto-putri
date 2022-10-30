<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosens';
    protected $fillable = ['nidn', 'nama', 'jenis_kelamin', 'alamat', 'ttl', 'photo', 'created_at', 'updated_at'];
    use HasFactory;
}
