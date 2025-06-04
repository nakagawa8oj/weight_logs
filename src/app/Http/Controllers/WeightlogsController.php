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

public function weightLogId(){
    return view('weightLogId');
}

public function update(Request $request){
    $form = $request->all();
    Weight_log::update($form);
    return redirect('/');
}

public function create(Request $request){
    $author = Author::find($request->id);
    return view('create', ['form' => $weight_log]);

}
}