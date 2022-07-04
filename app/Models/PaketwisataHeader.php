<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketwisataHeader extends Model
{
    use HasFactory;
    protected $table = 'paketwisata_headers';
    protected $primaryKey = 'id';
}
