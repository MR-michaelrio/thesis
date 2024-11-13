<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventLabel extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'label_name', 'color'
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_labels_mapping', 'label_id', 'event_id');
    }
}
