<?php

namespace App\Http\Controllers;

use App\Models\Mesin;
use Illuminate\Http\Request;

class MesinController extends Controller
{
    public function index(Request $request){
        $data = Mesin::all();
        if ($request->ajax()) {
            return datatables()->of($data)
            ->addColumn('action', function ($data) {
                $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" title="View" class="view btn btn-info btn-sm"><i class="bi bi-eye-fill"></i></a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" title="Edit" class="edit btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" data-id="' . $data->id . '" title="Delete" class="deletes btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('components.mesin.index');
    }
}
