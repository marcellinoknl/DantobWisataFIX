<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeDesaWisata extends Model
{
    use HasFactory;
    protected $table = 'like_desa_wisatas';
    protected $fillable = ['id_user', 'id_desawisata'];
    public $timestamps = false; 
}
