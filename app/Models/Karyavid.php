<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyavid extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'pencipta',
        'judul',
        'video',
    ];

    public function getPathAttribute()
    {
        $url = 'storage/vkarya/' . $this->video;
        return $url;
    }
}
