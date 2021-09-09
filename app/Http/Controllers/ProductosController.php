<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Store;
use App\Producto;
use DB;
use Carbon\Carbon;


class ProductosController extends Controller
{
    public function index(Request $request){
        $nombre = $request->get('nombre');

        $producto = Producto::where('nombre', 'like', "%$nombre%")
        ->where('users_id','=',\Auth::user()->id)
        ->orderBy('nombre', 'asc')->paginate(6);


        return view('store.productos.index',compact('producto'));
    }

    public function create(Request $request){
        return view('store.productos.registrar');
    }

    public function register(Request $request){
    
        
            $request->validate([
                'nombre' => 'required',
                'cantidad' => 'required',
                'precio_anterior' => 'required',
                'precio_actual' => 'required',
                'descuento' => 'required',
                'imagen' => 'required|mimes:jpeg,bmp,png|min::3072',
                
                ]);

                $producto = new Producto;
                $producto->nombre = $request->get('nombre');
                $producto->cantidad = $request->get('cantidad');
                $producto->precio_anterior = $request->get('precio_anterior');
                $producto->precio_actual = $request->get('precio_actual');
                $producto->descuento = $request->get('descuento');
                $producto->description = $request->get('description');
                $producto->estado = 1;
                $producto->users_id = \Auth::user()->id;
                


               if ($request->hasFile('imagen')) {      
                    $file=$request->file('imagen');
                    $file->move(base_path().'/public/imagenes/productos', str_replace(" ", "_",$file->getClientOriginalName()));
                    $producto->imagen=str_replace(" ", "_",$file->getClientOriginalName());
               }

            $producto->save();
            return back()->with('estado', 'Categoria  Activada con exito');

    }


    public function estado(Request $request){
        $estado = Producto::findOrFail($request->get('id'));
        $estado->estado = $request->get('estado');
        $estado->update();
        return back()->with('estado', 'Categoria  Activada con exito');
    }




    public function show($id){
        $producto = Producto::findOrFail($id);
        
        return view('store.productos.show',compact('producto'));

    }
}
