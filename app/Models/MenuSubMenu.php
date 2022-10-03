<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSubMenu extends Model
{
    use HasFactory;
    protected $table = "menusubmenu";


    public function children(){
        return $this->hasMany(MenuSubMenu::class,"parent","id");
    }

    public function parent() {
        return $this->belongsTo(MenuSubMenu::class,"parent","id");
    }
}
