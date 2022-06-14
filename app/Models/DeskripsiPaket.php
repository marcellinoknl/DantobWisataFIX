<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripsiPaket extends Model
{
    use HasFactory;
    protected $table = 'deskripsi_pakets';
    protected $primaryKey = 'id';
}