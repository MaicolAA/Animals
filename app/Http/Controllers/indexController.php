<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {

        $registros = DB::select('select * from getCantAnimales();');

        return view('index', ['registros' => $registros]);
    }


}
