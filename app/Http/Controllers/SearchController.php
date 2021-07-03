<?php

namespace App\Http\Controllers;

use App\Drug;
use App\Http\Controllers\Controller;
use App\Offer;
use App\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function resultsPage()
    {

        return view('results');

    }





    public function search(Request $request)
    {
        if (isset($_GET ['query'])) {

            $search_text = $_GET['query'];

            $drugs =Drug:: where ('name','LIKE','%'.$search_text.'%')->pluck('id')->toArray();

          $ids= Offer::whereIn('drug_id',$drugs)->where('available',1)->pluck('pharmacy_id')->toArray();
            $pharmacies =Pharmacy:: where ('name','LIKE','%'.$search_text.'%')->orWhereIn('id',$ids)-> get();

            return view('results',['pharmacies'=>$pharmacies]);
        } else {
            return view('results');

        }


    }

}
