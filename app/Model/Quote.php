<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'text', 
        'source', 
        'source_link', 
        'show_at'];
}
