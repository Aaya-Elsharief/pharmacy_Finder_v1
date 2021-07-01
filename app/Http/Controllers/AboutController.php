<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AboutController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function aboutPage()
    {

        return view('about');

    }




    public function contactPage()
    {

        return view('contact');

    }
}
