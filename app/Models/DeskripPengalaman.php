<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripPengalaman extends Model
{
    use HasFactory;
    protected $table = 'deskripsi_pengalaman';
    protected $primaryKey = 'id';
}
