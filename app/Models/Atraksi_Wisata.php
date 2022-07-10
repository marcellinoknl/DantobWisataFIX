<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atraksi_Wisata extends Model
{
    use HasFactory;
    protected $table = 'atraksi_wisata';
    protected $primaryKey = 'atraksi_id';
  
    public function scopeFilter($query, array $filters)
    {

        if(isset($filters['search']) ? $filters['search'] :false){
            return $query->where('judul','like','%'.$filters['search'].'%')
                        ->orWhere('deskripsi','like','%'.$filters['search'].'%');
        }
    }
}

