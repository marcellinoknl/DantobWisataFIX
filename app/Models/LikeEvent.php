<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeEvent extends Model
{
    use HasFactory;
    protected $table = 'like_events';
    protected $fillable = ['id_user', 'id_event'];
    public $timestamps = false; 
}
