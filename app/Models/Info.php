<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['name', 'subheader', 'titles', 'image'];
    protected $casts = ['titles' => 'array'];
}
