<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        /* $trains = Train::all(); */
        $trains = Train::where('orario_di_partenza', '>=', '2023-02-21 00:00:00')->get();

        return view('index', compact('trains'));
    }
}
