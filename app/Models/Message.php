<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name', 'surname', 'email', 'description',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
