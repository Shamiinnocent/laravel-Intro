<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "we are using the controler";
    }

    public function index2($user)
    {
        echo "we are using the controler Brother " .$user;
    }
    public function index3($name)
    {
        return view('users',['age'=> 18],['name'=>$name]);
    }    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
