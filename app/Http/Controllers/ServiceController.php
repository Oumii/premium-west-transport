<?php

namespace App\Http\Controllers;

use App\Forfait;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $forf = Forfait::get();
        return view('services')->with('services', $services)->with('forf', $forf);
    }

}
