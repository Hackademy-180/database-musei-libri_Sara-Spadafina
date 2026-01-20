<?php

namespace App\Http\Controllers;

use App\Models\Magazine;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magazines = Magazine::all();
        return view("magazines.index", compact("magazines"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("magazines.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Magazine::create([
            "name"=>$request->name,
            "title"=>$request->title,
            "content"=>$request->content,
        ]);
        return redirect(route("magazines_"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Magazine $magazine)
    {
        return view("magazines.show", compact("magazine"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Magazine $magazine)
    {
        return view("magazines.edit", compact("magazine"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Magazine $magazine)
    {
        $magazine->update([
            "name"=>$request->name,
            "title"=>$request->title,
            "content"=>$request->content,
        ]);
        return view("magazines.show", compact('magazine'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Magazine $magazine)
    {
        $magazine->delete();
        return redirect(route("magazines_"));
    }
}
