<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FactorController extends Controller
{
    public function show()
    {
        $data['strength'] = DB::table('strengths')->get();
        $data['weakness'] = DB::table('weaknesses')->get();
        $data['opportunity'] = DB::table('opportunities')->get();
        $data['threat'] = DB::table('threats')->get();

        return view('welcome', compact('data'));
    }
}
