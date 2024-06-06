<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musik extends Model
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
        $url = 'storage/vmusik/' . $this->video;
        return $url;
    }
}
