<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Request\StorePostRequest;
class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $stagiaires=[
            ["nom"=>"zahra","prenom"=>"bhrt","email"=>"yass@gmail.com"],
            ["nom"=>"hind","prenom"=>"bouharrat","email"=>"yas@gmail.com"],
            ["nom"=>"chaimae","prenom"=>"mhrad","email"=>"yass@gmail.com"],
            ["nom"=>"samira","prenom"=>"mofid","email"=>"yass@gmail.com"],

        ];
        return view("listSta",["stagiaires"=>$stagiaires]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');

       dd($request->all(),$nom);
        return  "cc";
     
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
    public function update(Request $request
    
    
    )
    {
        return view("modify");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
