<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $fillable = ['src', 'show_at', 'uploader', 'link'];
    
    public function getShowAtAttribute($date)
    {
        return \Carbon::createFromFormat('Y-m-d', $date);
    }
}
