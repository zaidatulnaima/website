<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'cover',
        'judul',
        'video',
    ];

    public function getPathAttribute()
    {
        $url = 'storage/vgambar/' . $this->video;
        return $url;
    }
}
