<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['quote', 'quote_source', 'quote_source_link', 'show_at'];
}
