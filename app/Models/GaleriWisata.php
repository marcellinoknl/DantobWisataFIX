<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriWisata extends Model
{
    use HasFactory;
    
    protected $table = 'galeri_wisata';
    protected $primaryKey = 'id_galeri';

    public function scopeFilter($query, array $filters){

        if(isset($filters['search']) ? $filters['search'] :false){
            return $query->where('judul','like','%'.$filters['search'].'%');
                        // ->orWhere('deskripsi','like','%'.$filters['search'].'%');
        }
    }
}
