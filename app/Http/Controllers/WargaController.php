<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

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
        $file = $request->file('Gambar');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        $tujuan_upload = 'image';
        $file->move($tujuan_upload, $nama_file);

        Warga::create([
            'Nama' => $request->Nama,
            'Gambar' => $nama_file,
            'Email' => $request->Email,
            'Instagram' => $request->Instagram,
            'Tiktok' => $request->Tiktok,
            'vote' => $request->vote
        ]);

        return redirect('/');
    }

    public function ubah($id)
    {
        $warga = Warga::find($id);
        return view('warga.ubah', compact(['warga']));
    }

    public function update($id, Request $request)
    {
        // menemukan data warga berdasarkan id
        $warga = Warga::find($id);
        $warga->Nama = $request->input('Nama');
        $warga->Email = $request->input('Email');
        $warga->Instagram = $request->input('Instagram');
        $warga->Tiktok = $request->input('Tiktok');
        $warga->vote = $request->input('vote');

        if ($request->hasFile('Gambar')) {
            // menghapus file gambar lama dari folder image
            $tujuan_upload = 'image';
            if (File::exists($tujuan_upload)) 
            {
                File::delete($tujuan_upload);
            }

            // mengganti nama file gambar baru dengan nama file gambar lama
            $file = $request->file('Gambar'); 
            $extention = $file->getClientOriginalExtension();
            $nama_file = time().'.'.$extention; // mengganti bagian waktu dari nama file gambar dengan waktu baru
            $file->move($tujuan_upload, $nama_file);
            $warga->Gambar = $nama_file;
        } 
        $warga->update($request->except(['_token', 'submit', 'gambar_lama', 'Gambar']));
        return redirect('/');
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
