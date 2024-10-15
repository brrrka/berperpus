<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\UserDashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }

    public function pinjam(){


        $katalogbuku = Catalog::all();

        foreach ($katalogbuku as $buku){
            UserDashboard::create([
                'judul_buku' => $buku->judul_buku,
                'pengarang' => $buku->pengarang,
                'penerbit' => $buku->penerbit,
                'tahun' => $buku->tahun,
            ]);
        }

        return view('dashboard.index', compact('userbook'));
    }
}
