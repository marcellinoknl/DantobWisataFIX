<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesaWisata extends Model
{
    use HasFactory;
    protected $table = 'desa_wisatas';
    protected $primaryKey = 'id';

    public function scopeFilter($query, array $filters)
    {

        if(isset($filters['search']) ? $filters['search'] :false){
            return $query->where('nama_desa','like','%'.$filters['search'].'%')
                        ->orWhere('deskripsi','like','%'.$filters['search'].'%');
        }
    }
}
