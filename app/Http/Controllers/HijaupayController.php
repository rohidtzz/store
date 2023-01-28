<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HijaupayController extends Controller
{
    public function KategoriPrabayar(){

        $apiKey = "dIoRxQOnAXfWFggoYWGpEbtroawzHG4hjMxVU3CE";

        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL             => "https://www.hijaupay.com/api/v1/product/prabayar/category",
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_HEADER          => false,
            CURLOPT_HTTPHEADER      => [
                "Authorization: Bearer ".$apiKey
            ]
        ]);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result = json_decode($result)->data;
        // dd($result->success);
        // echo $result;


    }

    public function OperatorPrabayar($cat_id){

        $apiKey = "dIoRxQOnAXfWFggoYWGpEbtroawzHG4hjMxVU3CE";

        $query = [
            'category_id'    => $cat_id, // filter berdasarkan id kategori (tidak wajib)
        ];

        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL             => "https://www.hijaupay.com/api/v1/product/prabayar/operator?".http_build_query($query),
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_HEADER          => false,
            CURLOPT_HTTPHEADER      => [
                "Authorization: Bearer ".$apiKey
            ]
        ]);

        $result = curl_exec($ch);
        curl_close($ch);

        // dd(json_decode($result));

        return $result = json_decode($result)->data;


    }

    public function ProdukPrabayar($operator_id,$category_id){

        $apiKey = "dIoRxQOnAXfWFggoYWGpEbtroawzHG4hjMxVU3CE";

        $query = [
            // 'id'    => , // filter berdasarkan id produk (tidak wajib)
            // 'code'    => $code, // filter berdasarkan kode produk (tidak wajib)
            'operator_id'    => $operator_id, // filter berdasarkan id operator (tidak wajib)
            'category_id'    => $category_id, // filter berdasarkan id kategori (tidak wajib)
        ];

        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL             => "https://www.hijaupay.com/api/v1/product/prabayar?".http_build_query($query),
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_HEADER          => false,
            CURLOPT_HTTPHEADER      => [
                "Authorization: Bearer ".$apiKey
            ]
        ]);

        $result = curl_exec($ch);
        curl_close($ch);

        // dd(json_decode($result));

        return $result = json_decode($result)->data;


    }
    public function pricelist(){

        // $key = md5(085156850530+)
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://prepaid.iak.dev/api/pricelist',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "status": "all",
            "username": "085156850530",
            "sign": "20bd20a6dc2dc713bce366af2377471f"
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response)->data;
    }
}
