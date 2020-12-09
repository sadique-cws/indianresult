<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
class ResultController extends Controller{
    //
    public function index(Request $r){

        if(isset($_GET['code'])){
            $data['result'] = Result::find($r->code);
            return view('home',$data);
        }
        else{
        return view('home');
        }
        
        
    }
    public function store(Request $r){

        $r->validate([
            'name' => 'required',
            'contact' => 'required',
            'school' => 'required',
            'address' => 'required',
            'maths' => 'required',
            'sci' => 'required',
            'sst' => 'required',
            'hindi' => 'required',
            'eng' => 'required'
        ]);


        Result::create([
            'name'=> $r->name,
            'contact'=> $r->contact,
            'school'=> $r->school,
            'address'=> $r->address,
            'maths'=> $r->maths,
            'sci'=> $r->sci,
            'sst'=> $r->sst,
            'hindi'=> $r->hindi,
            'eng'=> $r->eng,
        ]);

        return redirect()->back();

    }
}
