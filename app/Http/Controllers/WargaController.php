<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class WargaController extends Controller
{
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

    public function destroy($id)
    {
        $warga = Warga::find($id);
        $warga->Delete();
        return redirect('/');
    }

    public function showResult()
    {
        $result = [];
        $result['PASLON 1'] = Warga::where('vote', 'PASLON 1')->count();
        $result['PASLON 2'] = Warga::where('vote', 'PASLON 2')->count();
        $result['PASLON 3'] = Warga::where('vote', 'PASLON 3')->count();
        return view('warga.hasil', compact('result'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $warga = Warga::where('Nama', 'like', "%" . $cari . "%")
            ->orWhere('Email', 'like', "%" . $cari . "%")
            ->get();
        return view('warga.index', ['warga' => $warga]);
    }

    public function urut(Request $request)
    {
        $urut = $request->input('urut', 'nama');
        if (Schema::hasColumn('warga', $urut)) {
            $warga = Warga::orderBy($urut, 'asc')->get();
        } else {
            $warga = Warga::orderBy('nama', 'asc')->get();
        }
        return view('warga.index', ['warga' => $warga]);
    }
}
