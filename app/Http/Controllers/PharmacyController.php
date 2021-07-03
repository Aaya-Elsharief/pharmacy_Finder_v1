<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pharmacy;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;


class PharmacyController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function pharmacyPage()
    {

        return view('pharmacy');

    }

    public function view($id)
    {

        $pharmacy=Pharmacy::find($id);

       // $user=Auth::user();
        return view('pharmacy',['pharmacy'=>$pharmacy,'user'=>$pharmacy->user]);

    }


}
