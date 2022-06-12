<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripsiBeritaModel extends Model
{
    use HasFactory;
    protected $table = 'deskripsiberita';
    protected $primaryKey = 'id';
}
