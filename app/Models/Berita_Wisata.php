<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Berita_Wisata extends Model
{
    use HasFactory;
    protected $table = 'berita_wisata';
    protected $primaryKey = 'id_berita';
  
    public function scopeFilter($query, array $filters)
    {

        if(isset($filters['search']) ? $filters['search'] :false){
            return $query->where('judul_berita','like','%'.$filters['search'].'%')
                        ->orWhere('isi_berita','like','%'.$filters['search'].'%');
        }
    }
}