<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas_wisata';
    protected $primaryKey = 'id_fasilitas';
    public function scopeFilter($query, array $filters)
    {

        if(isset($filters['search']) ? $filters['search'] :false){
            return $query->where('nama_fasilitas','like','%'.$filters['search'].'%')
                        ->orWhere('deskripsi','like','%'.$filters['search'].'%');
        }
    }
}

