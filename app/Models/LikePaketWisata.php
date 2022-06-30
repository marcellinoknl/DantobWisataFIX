<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikePaketWisata extends Model
{
    use HasFactory;
    protected $table = 'like_paket_wisatas';
    protected $fillable = ['id_user', 'id_paket'];
    public $timestamps = false;
}
