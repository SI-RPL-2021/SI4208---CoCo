<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ReportMgtController extends Controller
{
    public function index() {
        $report = DB::select('select * from reports');
        return view('admin/report_mgt',['report'=>$report]);
    }
}
