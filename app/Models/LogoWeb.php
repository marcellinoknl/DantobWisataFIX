<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoWeb extends Model
{
    use HasFactory;
    protected $table = 'logo_webs';
    protected $primaryKey = 'id';
}
