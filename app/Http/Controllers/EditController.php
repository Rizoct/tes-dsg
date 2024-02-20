<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karya;

class EditController extends Controller
{
    public function edit($id)
    {
        $karya = Karya::find($id);

        if(!$karya){
            abort(404);
        }

        return view('edit', compact('karya'));
    }

    public function update(Request $request, $id)
    {
        $karya = Karya::find($id);
        $karya->nama = $request->nama;
        $karya->kategori = $request->kategori;
        $karya->pembuat = $request->pembuat;
        $karya->tahun_pembuatan = $request->tahun_pembuatan;
        $karya->harga = $request->harga;
        $karya->keterangan = $request->keterangan;
        $karya->save();

        return redirect('/')->with('status', 'Data Karya Berhasil Diubah!');
    }
    
    public function delete($id)
    {
        $karya = Karya::find($id);
        $karya->delete();

        return redirect('/')->with('status', 'Data Karya Berhasil Dihapus!');
    }
}
