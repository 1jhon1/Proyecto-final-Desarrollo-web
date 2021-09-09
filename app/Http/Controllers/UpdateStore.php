<?php

namespace App\Http\Controllers;

use App\User;
use App\Store;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class UpdateStore extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
    if (\Auth::user()->roles == 2) {
        $NegocioEdit=DB::table('store as store')
        ->join('users as usu','usu.id','=','store.id_users')
        ->select('*')
        ->where('usu.id','=',\Auth::user()->id)
        ->first();
        return view('store.stores.index',compact('NegocioEdit'));
    } else {
        return View('auth/login');
    }

    }

    public function update(Request $request){
        if (\Auth::user()->roles == 2) {

        $idstore=DB::table('store as store')->select('*')->where('store.id_users','=',\Auth::user()->id)->first();   
        $store = Store::findOrFail($idstore->id);
        $store->name_store	 = $request->get('nombre');
        $store->type_business = $request->get('tipo_negocio');
        $store->city = $request->get('ciudad');
        $store->num_phone = $request->get('telefono');
        $store->direction = $request->get('Direccion');
        $store->description = $request->get('descripcion');
        
        if(!empty(($request->get('latitud')))){
        $store->latitud	 = $request->get('latitud');
        $store->longitud = $request->get('longitud');
    }    
        if ($request->hasFile('logoempresa')) {      
           $file=$request->file('logoempresa');
           $file->move(base_path().'/public/imagenes/logos', str_replace(" ", "_",$file->getClientOriginalName()));
          $store->logo_company=str_replace(" ", "_",$file->getClientOriginalName());
          }
        $store->update();
        return back()->with('updatestore','eeeeee');

        } else {
            return View('auth/login');
        }
    }



    public function StatusStore(){

        $idstore=DB::table('store as store')->select('*')->where('store.id_users','=',\Auth::user()->id)->first();   
        $store = Store::findOrFail($idstore->id);
        if($store->status_business=='cerrado'){
            $store->status_business='abierto';
        }
        else{
        $store->status_business='cerrado';
        }  
        $store->update();
        return back()->with('statustore','eeeeee');
    }


     public function horario(){
        return view('store.stores.horario');
     }
    

     public function updatehorario(Request $request){

        $idstore=DB::table('store as store')->select('*')->where('store.id_users','=',\Auth::user()->id)->first();   
        $store = Store::findOrFail($idstore->id);
        $store->lunes = $request->get('lunes1');
        $store->lunes2 = $request->get('lunes2');

        $store->martes = $request->get('martes1');
        $store->martes2 = $request->get('martes2');

        $store->miercoles = $request->get('miercoles1');
        $store->miercoles2 = $request->get('miercoles2');

        $store->jueves = $request->get('jueves1');
        $store->jueves2 = $request->get('jueves2');

        $store->viernes = $request->get('viernes1');
        $store->viernes2 = $request->get('viernes2');

        $store->sabado = $request->get('sabado1');
        $store->sabado2 = $request->get('sabado2');

        $store->domingo = $request->get('domingo1');
        $store->domingo2 = $request->get('domingo2');
        $store->update();
        return back()->with('statustore','eeeeee');
     }
    
}
