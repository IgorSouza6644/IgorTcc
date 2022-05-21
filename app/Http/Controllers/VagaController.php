<?php

namespace App\Http\Controllers;


use App\Models\Vagas;
use Illuminate\Http\Request;


class VagaController extends Controller
{
    public function index()
    {
        

        $vagas = Vagas::get();

        return view ('vagas.index', compact('vagas'));
    }


    
    public function create()
    {
        return view('vagas.create');
    }





    public function store(Request $request)
    {
        
        Vagas::create($request->all());

        
        if($request->image){
           $data['image'] = $request->image->store('vagas'); 
        }








        return redirect ()-> route ('dashboard');

        

    }
    

}


