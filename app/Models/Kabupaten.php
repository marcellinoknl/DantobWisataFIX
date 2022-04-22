<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;

    protected $table = 'objwisatakabupaten';
    protected $primaryKey = 'id_obj_wisata_kabupaten';
}
