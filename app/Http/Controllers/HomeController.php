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

    public function iak(){
        $hijau = new HijaupayController;

        $data = $hijau->pricelist()->pricelist;

        // dd($data);

        foreach($data as $d){

            if($d->product_type == 'pulsa'){

                $dat[] = [
                    "product_code" => $d->product_code,
                    "product_description" => $d->product_description,
                    "product_nominal" => $d->product_nominal,
                    "product_details" => $d->product_details,
                    "product_price" => $d->product_price,
                    "product_type" => $d->product_type,
                    "active_period" => $d->active_period,
                    "status" => $d->status,
                    "icon_url" => $d->icon_url
                    // 'type' => $d->product_code
                ];

            }
            // dd($data);
        }
        $data = json_encode($dat,true);
        $data = json_decode($data);
        // dd($dat);


        return response()->json($data);
    }

    public function iak_kategori($kategori){


        if($kategori == 'pulsa'){



            return view('home.layanan.pulsa');
        } else{

        }


    }

    public function iak_prefix_pulsa($operator){

        $hijau = new HijaupayController;

        $data = $hijau->pricelist()->pricelist;

        // dd($data);

        // if($hp == '0896' || '0895'){


        // } else {

        // }

        foreach($data as $d){

            if($d->product_type == 'pulsa' && $d->product_description == $operator ){

                $dat[] = [
                    "product_code" => $d->product_code,
                    "product_description" => $d->product_description,
                    "product_nominal" => $d->product_nominal,
                    "product_details" => $d->product_details,
                    "product_price" => $d->product_price,
                    "product_type" => $d->product_type,
                    "active_period" => $d->active_period,
                    "status" => $d->status,
                    "icon_url" => $d->icon_url
                    // 'type' => $d->product_code
                ];

            }
            // else if($d->product_type == 'pulsa' && $d->product_description == $operator){
            //     $dat[] = [
            //         "product_code" => $d->product_code,
            //         "product_description" => $d->product_description,
            //         "product_nominal" => $d->product_nominal,
            //         "product_details" => $d->product_details,
            //         "product_price" => $d->product_price,
            //         "product_type" => $d->product_type,
            //         "active_period" => $d->active_period,
            //         "status" => $d->status,
            //         "icon_url" => $d->icon_url
            //         // 'type' => $d->product_code
            //     ];

            // }
            // dd($data);
        }
        // dd($dat);
        $data = json_encode($dat,true);
        $data = json_decode($data);




        return response()->json($data);

    }


}
