<?php

namespace App\Controllers;

use Sakuci\Controller;
use Sakuci\Http\Request;
use App\Models\Alat;

class AlatController extends Controller
{
    public function index(Request $request)
     {
        $data = Alat::orderBy('id_alat', 'desc')->paginate(4);
       return view('alat.index', compact('data'));
    }
    public function create(Request $request)
    {
        return view('alat.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_alat' => 'required|min:3|max:100',
            'kode_alat' => 'required|varchar|min:3|max:100',
        ]);
        Alat::create($data);
        return redirect(route('alat.index'))->with('success', 'Alat berhasil ditambahkan.');
    }

   public function edit(Request $request, $id_alat)
{
    $data = Alat::findOrFail($id_alat);
    return view('alat.edit', compact('data'));
}

    public function update (Request $request, $id_alat)
    {
        $data = $request->all();

        $alat = Alat::FindOrfail($id_alat);
        $alat->update($data);
        return redirect(route('alat.index'))->with('success', 'Alat berhasil diubah');
    }
   public function delete(Request $request, $id_alat)
    {
        $alat = Alat::findOrFail($id_alat);
        $alat->delete();

        return redirect()->route('alat.index')->with('success', 'Alat berhasil dihapus.');
    }
}
