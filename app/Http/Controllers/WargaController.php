<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warga = Warga::all();
        return view('warga.index', compact(['warga']));
    }

    public function create()
    {
        return view('warga.tambah');
    }

    public function store(Request $request)
    {
        Warga::create($request->except(['_token', 'submit']));
        return redirect('/');
    }

    public function ubah($id)
    {
        $warga = Warga::find($id);
        return view('warga.ubah', compact(['warga']));
    }
    
    public function update($id, Request $request)
    {
        $warga = Warga::find($id);
        $warga->update($request->except(['_token', 'submit']));
        return redirect('/warga');

    }

    public function hapus($id, Request $request)
    {
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/');

    }


}
