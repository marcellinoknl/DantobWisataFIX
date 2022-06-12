<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripsiEventModel extends Model
{
    use HasFactory;
    protected $table = 'DeskripsiEvent';
    protected $primaryKey = 'id';
}
