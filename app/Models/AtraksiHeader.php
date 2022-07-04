<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtraksiHeader extends Model
{
    use HasFactory;
    protected $table = 'atraksi_headers';
    protected $primaryKey = 'id';
}
