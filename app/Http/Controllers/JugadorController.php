<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;

class JugadorController extends Controller
{
    public function index(){
        $jugadores=Jugador::all();

        return view ('jugador',compact('jugadores'));
    }

    public function save(Request $request){
        Jugador::create([
            'nombres'=> $request->nombres,
            'edad'=> $request->edad,
        ]);
        return back();
    }


    public function edit($id){
        $jugador=Jugador::find($id);
        return view('editJugador', compact('id','jugador'));
    }

    public function update($id, Request $request){
        Jugador::where('id',$id)
        ->update([
            'nombres'=> $request->Nuevonombres,
            'edad'=> $request->Nuevaedad,
        ]);
        return redirect('Jugador');
    }
    
    public function delete($id){
        $jugador=Jugador::find($id);
        $jugador->delete();
        return redirect('Jugador');
    }

    public function index1(){
        return view('persona');
    }
}
