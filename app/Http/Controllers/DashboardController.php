<?php

namespace App\Http\Controllers;

use App\Models\DetailMesin;
use App\Models\JenisMesin;
use App\Models\Mesin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $mesin = Mesin::all();
        $jmesin = JenisMesin::all();
        $dmesin = DetailMesin::all();

        // dd($dmesin);
        return view('components.dashboard',compact('mesin','jmesin','dmesin'));
    }
}
