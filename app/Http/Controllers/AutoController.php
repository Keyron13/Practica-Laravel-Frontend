<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{
    public function index(){
        $autos=Auto::all();
        return view('autos', compact('autos'));
    }

    public function store(Request $request){
        Auto::create([
            'marca'=>$request->marca,
            'model'=>$request->modelo
        ]);

        return back();

    }

    public function update(Request $request,$id){
        
        Auto::where('id',$id)
        
            ->update([
                'marca'=>$request->marca,
                'model'=>$request->modelo
            ]);
            $autos->save();
        return back();

    }

    public function edit($id){
        
        $auto=Auto::find($id);

        return view('autoEdit', compact('auto'));

    }
    
}
