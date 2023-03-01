<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\Support\Carbon;
use Random\Randomizer;

class BiodataController extends Controller
{
    //
    public function create()
    {
        return view('biodata.create');
    }

    public function store(Request $request)
    {   
        $y = Carbon::now('Asia/Jakarta')->format('Y');
        $m = Carbon::now('Asia/Jakarta')->format('m');
        $d = Carbon::now('Asia/Jakarta')->format('d');
        $t = Carbon::now('Asia/Jakarta')->format('s');
        $regist = $y.$m.$d.$t.$t;

        $biodata = Biodata::create([
            'tregist' => $regist,
            'tname' => $request->input('tname'),
            'temail' => $request->input('temail'),
            'tphone_number' => $request->input('tphone_number'),
        ]);

        return redirect('/')->with('success', 'Kamu berhasil melakukan booking tiket!');
    }


}
