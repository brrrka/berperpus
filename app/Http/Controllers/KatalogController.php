<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(){
        $data = Catalog::all();

        return view ('katalog.index', [
            'title' => 'Katalog',
        ], compact('data'));
    }

    public function addkatalog(){
         return view('katalog.addkatalog', [
            'title' => 'Add Katalog',
         ]);
    }

    public function insertkatalog(Request $request){
        $validated = $request->validate([
            'judul' => 'required|min:3',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
        ]);

        Catalog::create($validated);
        return redirect('katalog')->with('berhasil', 'Penambahan buku Berhasil!');
    }

    public function showkatalog($id){
        $data=Catalog::find($id);
        return view ('katalog.showkatalog', ['title' => 'Edit Katalog',], compact('data'));
    }

    public function updatekatalog(Request $request, $id){
        $data = Catalog::find($id);
        $data->update($request->all());
        return redirect('katalog')->with('berhasil', 'Edit data buku berhasil!');
    }

    public function deletekatalog($id){
        $data=Catalog::find($id);
        $data->delete();
        return redirect('katalog')->with('berhasil', 'Katalog berhasil dihapus');
    }
}
