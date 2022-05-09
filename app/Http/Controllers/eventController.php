<?php

namespace App\Http\Controllers;

use App\Models\EventWisata;
use App\Models\SampulEvent;
use Illuminate\Support\Facades\DB;
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
    //sampul event
    public function kelolaindexActionSampul()
    {
        $sampulatraksi = SampulEvent::all();
        return view('admin.sampul-atraksi', compact('sampulatraksi'));
    }
    public function tambahsampul()
    {
        return view('admin.tambah-sampul-atraksi');
    }

    public function storesampul(Request $request)
    {
        $sampul = new SampulEvent();
        $sampul->nama_sampul = $request->nama_sampul;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/fasilitas', $file);
            $sampul->file_foto = $file;
        }

        $sampul->save();
        return redirect('sampul-atraksi');
    }

    public function editsampul($id)
    {
        $update = SampulEvent::find($id);
        return view('admin.ubah-sampulatraksi', compact('update'));
    }

    public function updatesampul(request $request, $id)
    {
        $this->validate(
            $request,
            [
                'nama_sampul' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
            ]
        );
        $update = SampulEvent::find($id);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/Atraksi', $file);
            $update->file_foto = $file;
        }
        $update->id_sampul_atraksi = $request->nama_sampul;
        $update->file_foto = $file;
        $update->save();

        return redirect('sampul-atraksi');
    }
    public function hapusSampul($id)
    {
        $hapus = SampulEvent::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}
