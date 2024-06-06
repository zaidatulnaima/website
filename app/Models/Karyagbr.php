<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyagbr extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'pencipta',
        'judul',
        'gambar',
    ];

    public function getPathAttribute()
    {
        $url = 'storage/gambar/' . $this->gambar;
        return $url;
    }
}
