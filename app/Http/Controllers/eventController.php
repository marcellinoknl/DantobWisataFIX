<?php

namespace App\Http\Controllers;

use App\Models\EventWisata;

use Illuminate\Http\Request;

class eventController extends Controller
{
    public function indexAction()
    {
        return view('user-page.blog.event');
    }

    public function kelolaindexAction()
    {

        $eventwisata = EventWisata::all();
        return view('admin.kelolaevent', compact('eventwisata'));
    }

    public function tambah()
    {
        return view('admin.tambah-event-wisata');
    }
    public function store(Request $request)
    {
        $objek = new EventWisata();
        $objek->judul_event = $request->judul_event;
        $objek->deskripsi_event = $request->deskripsi_event;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/eventwisata', $file);
            $objek->file_foto = $file;
        }

        $objek->save();
        return redirect('kelolaevent');
    }

    public function edit($id_event)
    {
        $update = EventWisata::find($id_event);
        return view('admin.ubah-eventwisata', compact('update'));
    }

    public function update(request $request, $id_event)
    {
        $update = EventWisata::find($id_event);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/eventwisata', $file);
            $update->file_foto = $file;
        }
        $update->judul_event = $request->judul_event;
        $update->file_foto = $file;
        $update->deskripsi_event = $request->deskripsi_event;
        $update->save();

        return redirect('kelolaevent');
    }

    public function hapus($id_event)
    {
        $hapus = EventWisata::find($id_event);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}
