<?php
//namespace untuk mengatur alamat url
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // return view : memanggil file blade
        //folder.file
        return view('pages.index');
    }

}