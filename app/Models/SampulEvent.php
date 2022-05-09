<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampulEvent extends Model
{
    use HasFactory;
    protected $table = 'sampul_event';
    protected $primaryKey = 'id';
}
