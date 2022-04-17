<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atraksi_Wisata extends Model
{
    use HasFactory;
    protected $table = 'atraksi_wisata';
    protected $primaryKey = 'atraksi_id';
}
