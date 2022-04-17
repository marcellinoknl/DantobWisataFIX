<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventWisata extends Model
{
    use HasFactory;

    protected $table = 'event_wisatas';
    protected $primaryKey = 'id_event';
}
