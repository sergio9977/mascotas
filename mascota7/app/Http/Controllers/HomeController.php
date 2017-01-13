<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\mascotasmodel;
use App\mascota;
use App\sexo;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//$results = sexo::select('select * from sexo where Id_Sexo = ?', array(1));

   $datos=mascota::All();
  $users = DB::select('select Id_Mascota,Nombre,Sexo,Foto,Descripcion,Edad,Tamano from sexo,mascota,tamano where mascota.Id_Sexo = sexo.Id_Sexo and mascota.Id_Tamano=tamano.Id_Tamano');

    //  $pastel = sexo::where('Id_Sexo','1')->first();
      //dd($users);
       return view('home')->with(['mascota'=> $users]);
    }

    
}
