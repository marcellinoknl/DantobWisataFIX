<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripsiFasiltas extends Model
{
    use HasFactory;
    protected $table = 'deskripsi_fasiltas';
    protected $primaryKey = 'id';
}