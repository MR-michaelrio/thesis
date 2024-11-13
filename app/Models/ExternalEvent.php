<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExternalEvent extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'title', 'background_color', 'border_color', 'text_color'
    ];
}
