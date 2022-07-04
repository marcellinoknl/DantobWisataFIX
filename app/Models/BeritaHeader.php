<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaHeader extends Model
{
    use HasFactory;
    protected $table = 'berita_headers';
    protected $primaryKey = 'id';
}
