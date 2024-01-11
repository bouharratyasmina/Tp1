<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\InformsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Middleware\RoleMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

one stp:creer model php artisan make:model nom --migration
sec stp:execute php artisan migrate








post:form /soumettre data/Ajouter mod sup
get:lecture/demande data/data katban f url/
PUT:modific comp:nbdl kulchi ga3e lignes
/PATCH:modific partielle:katbdl chwiya/ modiffier ri li tbdl
DELETE:supp
ANY: ay methode kidi dkchoi ela hassab lirayhtaj//katadapta m3a form
Match:: tsta3eml ri joj(get et post) katkon specific tn katspicifyi chnu briti
RESSOURCES:type de cotroleur:resource (CRUD)/
index:get,create:get,save:post,edit:get,update:put/patch,destroy:delete,show:get,
*/
          

/*
//bach ytbdl url ida brit mn route n route neeml redirect
Route:: recdirect(("de","à")ز/redirect() est utilisée pour effectuer une redirection temporaire (302 Found) 
Route:: permanentrecdirect("de","à"):katmchi n 301:ffectuer une redirection permanente (301 Moved Permanently) d 
katmchi n 302 par deafult
//php artisan route:list -v(pour afficher middlwere)// /search: afficher les listes de routes
//php artisan serve 

 */
//Route::get("/role/{role}",function(){return "";})->middleware("RoleMiddleware:admin");
//Route::get("/Profile",[ProfileController::class,"Profile"]);
//Route::get("/Informations",[InformsController::class,"Informations"]);
//Route::get("/{nom}",[HomePageController ::class,"index"]);
//Route::resource('stagiaires', StagiaireController::class);
//Route::get("/form",[StagiaireController::class,"create"]);
//Route::get("/modify",[StagiaireController::class,"update"]);
//Route::get("{nom}",[StagiaireController::class,"index"]);

Route::resource('products', ProductsController::class);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get("/create",[ProductsController::class,"create"]);
Route::get("/modify1",[ProductsController::class,"update"]);
Route::get("{libelle}",[ProductsController::class,"index"]);

//passage de parametre 
//variable optionnel:valeur par default 
//optionnel : khs ykon houwa lakhar bach ykhdm
//l'ORDRE
//appliquer condition sur variable:: where
//kansmiw route b name ykon unique ->name 'home';
// pour faire redirection $url:: route->('home') / return redirect()->route("home")
// Request 
Route::get('/stagiaire/{nom?}/Acueil',function($nom="cc"){
    return ("le nom de stagiaire est ".$nom);//->where("nom",["yass","souad","salwa"]);
});//->name("accueil");
//return redirect()->route("accueil",['nom'=>$id,"calss"=>$class]));

Route::get('/class/{class}/stagiaire/{nom?}',function($class,$nom="cc"){
    return (" le nom de stagiaire est ".$nom ." appartient a class " .$class);
});
//return redirect()->route("")




//ida brit ndwz variab n form
Route::post('/hello', function () {
    $nom="Yasmina";
    $prenom="BOUHARRAT";
    return view('hello',["nom"=>$nom, "prenom"=>$prenom,
    "cours"=>["PHP","Laravel","React"]

]);
});

// ida br nzid sygment dynamic matexecutelech dk page ta nzid variab
Route::get('/hello/{nom}/{prenom}', function ($nom,$prenom) {
    return view('hello',["nom"=>$nom,"prenom"=>$prenom]);
});

//fo3t manbqaw kul mara neemlo ,, onzido variba nkhdmo b wahad tr
//import class /recuperer mn form server
Route::get('/hello/{nom}/{prenom}', function (Request $request) {
    dd($request->nom);
    return view('hello',["nom"=>$nom,"prenom"=>$prenom]);
});

Route::get('/hello/{nom}/{prenom}', function (Request $request,$nom) {
    //dd($request->nom);
    //return view('hello',["nom"=>$nom,"prenom"=>$prenom]);
    return "satgiaire".$nom;
});



//  f 3ot manstaemlo callback func nstaemlo controleur
//controleur kidi data mn model n view
//pour le crer php artisan make:controller homePg
//nomControlleur,nomFunct

//chemin unq,action:func rappel
//contro raytraiter demande machi function
//php artisan make:controller homeCon
//->name("home")->middleware("auth");;
//maymknchnchuf accueil hta ntloga

//route: tri9 bin view o controller
//php artisan make:controller ProvisionServer --invokable :pour crer un controller avec an u=seul function ou methode
//php artisan make:controller ProvisionServer --resource (pour CRUD)
//php artisan make:model ProvisionServer --model=photo --resource



//N"ayt n route
//Route::("nom",["com"=>$nom])





//Route::ressource("photos",[PhotoController::class])
//pour regrouper pls resources
//Route::resources([
    //'photo'=>photoController::class,
    //'posts'=>PostController::class,
//pour gere les error ida majbarchi model
//])->missing(function(Request $request){
    //return redirect::route("photos.index")
//})->only( ["post","get"]) // kan9dar n specifier
    //->execpt("destroy")

    //creer ressource de type api
    //Route::apiResource("photos",phptoController::class);





//resouce imbriqué
//rename resource
//shallow()

//1


//2

//3
