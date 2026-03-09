<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageHeader extends Model
{
    protected $fillable = [
        'page',
        'header',
        'subheader',
        'updated_date',
        'cta_header',
        'cta_subheader',
    ];
}
