<?php

namespace App\Http\Controllers;
use App\User;
use App\Store;
use App\Producto;
use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;
class ViewProductoStore extends Controller
{
    public function returnProductStore($id){

        $Tienda = Store::where('id_users',$id)->first();

        $productosTienda=DB::table('store as store')
        ->join('productos as pro','store.id_users','=','pro.users_id')
        ->select('pro.id','pro.users_id as idtienda','pro.nombre','pro.cantidad','pro.precio_anterior','pro.precio_actual'
        ,'pro.descuento','pro.description','pro.imagen','pro.estado')
        ->where('pro.users_id','=',$id)
        ->where('pro.estado','=',1)
        ->get(); 
        

        return view('web.product',compact('productosTienda','Tienda'));
    }

    public function compra(){
        return view('web.procesarcompra');
    }
     
    public  function enviarpedidowhatsapp(Request $request){
      
    return $request;
        echo '<a  href="https://api.whatsapp.com/send?phone=57'.$request->get('telefono').'&amp;text=Necesitoss %20a%20%20este%20pedido%20por favor'.$request->get('namewhatsapp').''.$request->get('telefono').''.$request->get('observacionwhatsapp').' " target="_blank" rel="noopener"><img class="botonF1" width="60" height="60"   alt="icono"></a>';
					
    }
}
