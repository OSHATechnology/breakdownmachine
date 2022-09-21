<?php

namespace App\Http\Controllers;

use App\Models\CategoryMesin;
use App\Models\DetailMesin;
use App\Models\Mesin;
use Illuminate\Http\Request;
use DB;


class DashboardController extends Controller
{
<<<<<<< HEAD
    public function index(){
        $mesin = Mesin::all();
        $dmesin = DetailMesin::all();
        $cmesin = CategoryMesin::all();

        // dd($dmesin);
        return view('components.dashboard',compact('mesin','dmesin','cmesin'));
=======
     public function index(){
          $mesin = Mesin::all();
          $jmesin = JenisMesin::all();
          $dmesin = DetailMesin::all();
          $date = date_create($dmesin->min('next_maintenance'));

          $data_possibility = DB::table('detail_mesins')
                    ->select('breakdown_possibility', DB::raw('count(breakdown_possibility) as total'))
                    ->groupBy('breakdown_possibility')
                    ->get();
          
          $data_maintenance = DB::table('detail_mesins')
                    ->select('next_maintenance', DB::raw('count(next_maintenance) as total'))
                    ->groupBy('next_maintenance')
                    ->get();

          $format_Date = date_format($date, 'd M Y');
          return view('components.dashboard',compact('mesin','jmesin','dmesin', 'format_Date', 'data_possibility', 'data_maintenance'));
    }

    public function search($word)
    {
        $data = DetailMesin::query()
                ->join('mesins', 'mesins.id', '=', 'detail_mesins.id_nama')
                ->join('jenis_mesins', 'jenis_mesins.id', '=', 'detail_mesins.id_jenis')
                ->where('detail_mesins.kode_mesin', 'LIKE', "%$word%")
                ->orWhere('detail_mesins.nama', 'LIKE', "%$word%")
                ->first();

        
        echo json_encode($data);
    }

    public function chartDonutPossibility()
    {
          $data_possibility = DB::table('detail_mesins')
               ->select('breakdown_possibility', DB::raw('count(breakdown_possibility) as total'))
               ->groupBy('breakdown_possibility')
               ->get();

          echo json_encode($data_possibility);
>>>>>>> fa3b1b46c63f1a1f3080eea1682d468f66deb1fa
    }
}
