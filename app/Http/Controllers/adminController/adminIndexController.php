<?php

namespace App\Http\Controllers\adminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminIndexController extends Controller
{
    public function indexAction() {
        return view('admin.admin-index');
    }
}
