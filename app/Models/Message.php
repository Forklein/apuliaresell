<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function get_date($column)
    {
        return Carbon::create($column)->format('d-m-Y');
    }
}
