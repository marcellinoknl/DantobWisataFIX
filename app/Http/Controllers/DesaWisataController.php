<?php

namespace App\Http\Controllers;
use App\Models\Kabupaten;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DesaWisataController extends Controller
{
    public function indexAction()
    {
        $objwisatakabupaten = DB::table('objwisatakabupaten')->get();

        return view('user-page.blog.desawisata.desawisata', compact('objwisatakabupaten'));
    }

}
