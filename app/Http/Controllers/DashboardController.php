<?php

namespace App\Http\Controllers;

use App\Models\DetailMesin;
use App\Models\CategoryMesin;
use App\Models\Mesin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
     public function __construct() {

     }
     public function index(){
          $mesin = Mesin::all();
          $cmesin = CategoryMesin::all();
          $dmesin = DetailMesin::all();
          $date = date_create($dmesin->min('next_maintenance'));

          $data_possibility =DB::table('detail_mesins')
                    ->select('breakdown_possibility', DB::raw('count(breakdown_possibility) as total'))
                    ->groupBy('breakdown_possibility')
                    ->get();
          
          $data_maintenance = DB::table('detail_mesins')
                    ->select('next_maintenance', DB::raw('count(next_maintenance) as total'))
                    ->groupBy('next_maintenance')
                    ->get();

          $format_Date = date_format($date, 'd M Y');

          // dd($join);
          return view('components.dashboard',compact('mesin','cmesin','dmesin', 'format_Date', 'data_possibility', 'data_maintenance'));
    }

    public function search($word)
    {
        $data = DetailMesin::query()
                ->join('mesins', 'mesins.id', '=', 'detail_mesins.id_mesin')
                ->join('category_mesins', 'category_mesins.id', '=', 'mesins.id_category')
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
    }

     public function index2(){
          // $data = DB::table('detail_mesins')
          //           ->where('id_mesin', '=', '1')
          //           ->get();

          $data = DetailMesin::all();
     
          // $join = DB::table('mesins')
          // ->leftJoin('detail_mesins', 'mesins.id', '=', 'detail_mesins.id_mesin')
          // ->select('*')
          // // ->where('detail_mesins.id','=',$id)
          // ->get();

          // dd($data);
          return view('components.dashboard2',compact('data'));
     }
     public function getDetailMachine()
     {
          $data = DB::table('detail_mesins')
                    ->where('id_mesin', '=', '1')
                    ->orWhere('id_mesin', '=', '3')
                    ->get();
          echo json_encode($data);
     }
     public function updatePossibility(Request $request)
     {
          $data1 = DetailMesin::find($request->data1['id']);
          $data1->breakdown_possibility = $request->data1['possibility'];
          $data1->condition = ($request->data1['possibility'] < 50 ? 'Bad': 'Good');
          $data1->next_maintenance = date('Y-m-d', strtotime('-1 year'));
          $data1->update();

          $data2 = DetailMesin::find($request->data2['id']);
          $data2->breakdown_possibility = $request->data2['possibility'];
          $data2->condition = ($request->data2['possibility'] < 50 ? 'Bad': 'Good');
          $data2->next_maintenance = date('Y-m-d', strtotime('-1 year'));
          $data2->update();

          $data3 = DetailMesin::find($request->data3['id']);
          $data3->breakdown_possibility = $request->data3['possibility'];
          $data3->condition = ($request->data3['possibility'] < 50 ? 'Bad': 'Good');
          $data3->next_maintenance = date('Y-m-d', strtotime('-1 year'));
          $data3->update();

          echo json_encode($request);
     }
     public function repairUpdate(Request $request)
     {
          global $finish;
          $data = DetailMesin::find($request->id);
          $data->breakdown_possibility = $request->breakdown_possibility;
          $data->condition = ($request->breakdown_possibility < 80 ? 'Good': 'Very Good');
          $data->next_maintenance = date('Y-m-d', strtotime('+1 year'));
          $data->update();

          $finish = $finish+1;
          echo json_encode($finish);
     }
     public function finish()
     {
          global $finish;

          echo json_encode($finish);
     }
}