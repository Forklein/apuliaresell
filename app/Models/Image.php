<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Image extends Model
{
    protected $fillable = [
        'name', 'visibility', 'category_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function get_date($column)
    {
        return Carbon::create($column)->format('d-m-Y');
    }

    public function contains($string, $search)
    {
        return Str::contains($string, $search);
    }
}
