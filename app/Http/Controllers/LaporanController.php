<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class LaporanController extends Controller
{
    public function semuabuku()
    {
        $buku = Buku::all();

        return view ('laporan.SemuaBuku',compact('buku'));
    }

    public function FilterPenulis()
    {
        return view ('laporan.FilterPenulis');
    }
}
