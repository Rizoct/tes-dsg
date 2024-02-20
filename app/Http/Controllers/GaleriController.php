<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function showData()
    {
        $karya = DB::table('karya')->get();
        return view('galeri', ['karya' => $karya]);
    }

    public function searchData(Request $request)
    {
        $search = $request->search;
        $karya = DB::table('karya')
            ->where('nama', 'like', "%" . $search . "%")
            ->get();
        return view('galeri', ['karya' => $karya]);
    }

}
