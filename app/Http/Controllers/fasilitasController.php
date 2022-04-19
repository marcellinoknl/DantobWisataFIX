<?php

namespace App\Http\Controllers;
use App\Models\Fasilitas;
use App\Models\SampulFasilitas;
use Illuminate\Http\Request;

class fasilitasController extends Controller
{
    public function indexAction() {
        return view('user-page.fasilitas');
    }
    public function kelolaindexActionSampul() {
        $sampulfasilitas = SampulFasilitas::all();
        return view('admin.kelola-sampul-fasilitas',compact('sampulfasilitas'));

    }
    public function kelolaindexActionDaftarFasilitas() {
        $fasilitas = Fasilitas::all();
        return view('admin.kelola-fasilitas',compact('fasilitas'));

    }

    public function tambahsampul(){
        return view('admin.tambah-sampul-fasilitas');
    }

    public function tambahfasilitas(){
        return view('admin.tambah-fasilitas-wisata');
    }
}
