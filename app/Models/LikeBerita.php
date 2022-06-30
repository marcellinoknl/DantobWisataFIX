<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeBerita extends Model
{
    use HasFactory;
    protected $table = 'like_beritas';
    protected $fillable = ['id_user', 'id_berita'];
    public $timestamps = false;
}
