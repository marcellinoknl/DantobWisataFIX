<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeAtraksi extends Model
{
    use HasFactory;
    protected $table = 'like_atraksis';
    protected $fillable = ['id_user', 'atraksi_id'];
    public $timestamps = false;
}
