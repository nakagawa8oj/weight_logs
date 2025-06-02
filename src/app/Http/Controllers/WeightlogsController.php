<?php

namespace App\Http\Controllers;
use App\Models\Weight_log;
use Illuminate\Http\Request;

class WeightlogsController extends Controller
{

public function weight_logs(){
$weightlogs=Weight_log::all();

return view('weight_logs',['weight_logs'=>$weightlogs]);
} 
    //
}
