<?php

namespace App\Http\Controllers;

use App\Models\Cvs;
use Illuminate\Http\Request;





class CvController extends Controller

{
    public function index()
    {
        

        $cvs = Cvs::get();

        return view ('cvs.index', compact('cvs'));
    }


    
    public function create()
    {
        return view('cvs.create');
    }



    public function store(Request $request)
    {
        
        Cvs::create($request->all());

        
        return redirect ()-> route ('dashboard');

        
    }


    


}
