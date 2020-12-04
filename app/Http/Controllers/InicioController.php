<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InicioController extends Controller
{
    public function index()
    {
//        $directories = Storage::directories('public');
//        if(!array_search('public/curso', $directories)){
//            Storage::makeDirectory('public/curso');
//            dd('holi');
//        }
        return view('front.index');
    }
}
