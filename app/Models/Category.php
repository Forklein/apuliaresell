<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'color'
    ];

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function get_date($column)
    {
        return Carbon::create($column)->format('d-m-Y');
    }
}
