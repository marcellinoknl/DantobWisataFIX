<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita_Wisata extends Model
{
    use HasFactory;
    protected $table = 'berita_wisata';
    protected $primaryKey = 'id_berita';
}