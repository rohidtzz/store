<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\HijaupayController;

class HomeController extends Controller
{
    public function home(){

        $hijau = new HijaupayController;

        $data = $hijau->KategoriPrabayar();


        // dd($data);

        return view('home.index',compact('data'));

    }

    public function operator($category_id){
        $hijau = new HijaupayController;

        $data = $hijau->OperatorPrabayar($category_id);

        // dd($data);

        return response()->json($data);
    }

    public function product($operator_id,$category_id){
        $hijau = new HijaupayController;

        $data = $hijau->ProdukPrabayar($operator_id,$category_id);

        // dd($data);

        return response()->json($data);
    }
}
