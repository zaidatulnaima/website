<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bisyaratvideo extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'judul',
        'video',
    ];

    public function getPathAttribute()
    {
        $url = 'storage/video/' . $this->video;
        return $url;
    }
}
