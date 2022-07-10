<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objek_Wisata extends Model
{
    use HasFactory;

    protected $table = 'objek_wisata';
    protected $primaryKey = 'id_obj_wisata';
    public function scopeFilter($query, array $filters){

        if(isset($filters['search']) ? $filters['search'] :false){
            return $query->where('nama_wisata','like','%'.$filters['search'].'%')
                        ->orWhere('deskripsi','like','%'.$filters['search'].'%');
        }
    }
}
