<?php
//interaction avec data mn model n view
//traitement 
//php artisan make:controller HomePageController
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//protected::mere n fille f l'heritage 
//static :://constructeur
class HomePageController extends Controller
{
    public function index(Request $request,$nom){
        $n1=1;
        $n2=2;
        $nom=$request->nom;
        $users=[
            ['id'=>'1','nom'=>'yasmina','metier'=>'tech'],
            ['id'=>'2','nom'=>'Hind','metier'=>'tech'],
            ['id'=>'3','nom'=>'sandia','metier'=>'tech'],
        ];
        //return view('home', ["nom" => $nom,"languages"=>$languages]);
        return view('home', compact('nom','users','n1','n2'));
    }
   
}
//php artisan make:controller ProvisionServer --invokable :pour crer un controller avec an u=seul function ou methode
