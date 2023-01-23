<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PaginaController extends Controller
{
    public function nosotrosPage(){

        $users=User::all();

        $nombres='Damian Ortiz';

        return view ('nosotros', compact('nombres','users'));

    }
    public function welcomePage(){
        return view ('welcome');
    }
}
