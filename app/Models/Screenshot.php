<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Screenshot extends Model
{
    protected $fillable = [
        'url',
        'md5',
        'ip'
    ];

    public function getImageUrl(): string
    {
        return url('saved-screenshots/' . $this->md5 . '.png');
    }
}
