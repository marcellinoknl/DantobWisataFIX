<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;
    protected $table = 'paket_wisatas';
    protected $primaryKey = 'id';

    public function scopeFilter($query, array $filters){

        if(isset($filters['search']) ? $filters['search'] :false){
            return $query->where('nama_paket','like','%'.$filters['search'].'%')
                        ->orWhere('deskripsi','like','%'.$filters['search'].'%');
        }
    }
}
