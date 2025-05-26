<?php

namespace App\Http\Controllers;
use App\Models\Weight_log;
use Illuminate\Http\Request;

class WeightlogsController extends Controller
{

public function weight_log(){
$weight_logs=Weight_log::all();

return view('weight_log',['weight_logs'=>$weight_logs]);
}
    //
}
