<?php

namespace App\Http\Controllers;

use App\Models\CategoryMesin;
use App\Models\DetailMesin;
use App\Models\Mesin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $mesin = Mesin::all();
        $dmesin = DetailMesin::all();
        $cmesin = CategoryMesin::all();

        // dd($dmesin);
        return view('components.dashboard',compact('mesin','dmesin','cmesin'));
    }
}
