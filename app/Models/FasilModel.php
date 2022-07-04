<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilModel extends Model
{
    use HasFactory;
    protected $table = 'fasil_models';
    protected $primaryKey = 'id';
}
