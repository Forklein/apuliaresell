<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'name', 'image', 'visibility',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
