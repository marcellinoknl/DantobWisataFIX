<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DewiHeader extends Model
{
    use HasFactory;
    protected $table = 'dewi_headers';
    protected $primaryKey = 'id';
}
