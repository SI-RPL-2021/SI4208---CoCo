<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        return view ('report');
    }

    public function report(Request $request)
    {
        DB::table('reports')->insert([
            'nama' => $request->nama,
            'konten' => $request->konten,
        ]);
        
        return redirect('/home');
    }
}
