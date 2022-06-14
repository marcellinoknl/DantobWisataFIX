<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripsiGaleri extends Model
{
    use HasFactory;
    protected $table = 'deskripsi_galeris';
    protected $primaryKey = 'id';
}