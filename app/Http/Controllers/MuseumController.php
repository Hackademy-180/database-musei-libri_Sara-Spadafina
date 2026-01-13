<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    public function museumsIndex() {
        $musei=Museum::all();
        return view('museums.index', compact("musei"));
    }
    public function museumsCreate() {
    return view('museums.create');
    }
    public function museumsSubmit(Request $request) {
        Museum::create([
            "name"=>$request->name,
            "country"=>$request->country,
            "year"=>$request->year,
            "description"=>$request->description,
        ]);
        return redirect(route("museums_create_"));
    }
}
