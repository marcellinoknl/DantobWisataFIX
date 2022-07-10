<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventWisata extends Model
{
    use HasFactory;

    protected $table = 'event_wisatas';
    protected $primaryKey = 'id_event';

    public function scopeFilter($query, array $filters)
    {

        if(isset($filters['search']) ? $filters['search'] :false){
            return $query->where('judul_event','like','%'.$filters['search'].'%')
                        ->orWhere('deskripsi_event','like','%'.$filters['search'].'%');
        }
    }
}