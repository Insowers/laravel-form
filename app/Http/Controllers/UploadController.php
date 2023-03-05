<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request) {
        $fileName = $request->file('file')->store('curricula');
        /* $name = $request->nome;
        dd($request->all()); */
        $tuttiCampi = $request->all();
        return view('stampa',compact('tuttiCampi'));
    }
}
