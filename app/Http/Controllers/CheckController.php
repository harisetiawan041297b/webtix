<?php

namespace App\Http\Controllers;

use App\Models\Table;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index()
    {
        return view('check', [
            "title" => "WebTix - Check in confirmation",
            "table" => Table::all()
        ]);
    }

    public function create()
    {
        return view('check.create');
    }

    public function store(Request $request, $id)
    {   

        $biodata = Table::where('id', $id)->update([
            'tcheck' => true,
        ]);

        return redirect('/list');
    }
}
