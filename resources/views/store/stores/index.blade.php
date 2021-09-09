@extends('layouts.admin')
@section('contenido')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


        <div class="card">
               
                  <div class="card-body">
                    <h4 class="card-title">Datos del negocio</h4>

                    @if( session('updatestore'))
                    <script>
                    Swal.fire(
                    'Exitoso',
                    'Negocio actualizado',
                    'success'
                    )
                    </script>      
                    @endif


                    @if( session('statustore'))
                    <script>
                    Swal.fire(
                    'Exitoso',
                    'Estado del negocio actualizado',
                    'success'
                    )
                    </script>      
                    @endif

                    

                    @if($NegocioEdit->status_business=='cerrado')  
                        <a class="btn  btn-outline-danger" href="" data-target="#modal-modalEstadoTienda-{{ Auth::user()->id }} " data-toggle="modal"  title="Suspender {{$NegocioEdit->status_business}}"  >Negocio Cerrada &nbsp; <i class="fas fa-store-alt"></i></a>
                        @endif
                        @if($NegocioEdit->status_business=='abierto')
                        <a class="btn  btn-outline-success" href="" data-target="#modal-modalEstadoTienda-{{ Auth::user()->id }} " data-toggle="modal"  title="Suspender {{$NegocioEdit->status_business}}"  >Negocio Abierta &nbsp; <i class="fas fa-store"></i></a>
                        @endif                    
                     @include('store.stores.ModalEstadoStore')
                        
                     
                     <form action="{{ url('stores/update')  }}" enctype="multipart/form-data" method="post">
                           @csrf
                                    <div class="form-group row">
                                        <label for="nombre" class="col-sm-3 text-right control-label col-form-label">Nombre del Negocio</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nombre" value="{{  $NegocioEdit->name_store }}" placeholder="Nombre...">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Tipo de negocio</label>
                                        <div class="col-sm-9">
                                        <select class="select2 form-control custom-select"  name="tipo_negocio" style="width: 100%; height:36px;">
                                            @if($NegocioEdit->type_business	=='tienda') 
                                            <option value="tienda" selected>Tienda</option>                                            
                                            <option value="restaurante">Restaurante</option>
                                            <option value="food">Comidas rapidas</option> 

                                            @elseif ($NegocioEdit->type_business	=='restaurante')
                                            <option value="tienda">Tienda</option>                                            
                                            <option value="restaurante" selected>Restaurante</option>
                                            <option value="food">Comidas rapidas</option> 

                                            @elseif ($NegocioEdit->type_business	=='food')
                                            <option value="tienda">Tienda</option>                                            
                                            <option value="restaurante" >Restaurante</option>
                                            <option value="food" selected>Comidas rapidas</option> 
                                            @else  

                                            <option value="tienda">Tienda</option>                                            
                                            <option value="restaurante" >Restaurante</option>
                                            <option value="food" >Comidas rapidas</option> 
                                            @endif
                                        </select>   
                                      </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ciudad</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="ciudad" value="{{  $NegocioEdit->city }}" placeholder="Ciudad...">
                                        </div>
                                    </div>



                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Telefono</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="telefono" value="{{  $NegocioEdit->num_phone }}" placeholder="Telefono...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Dirección</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="Direccion" value="{{  $NegocioEdit->direction }}" placeholder="Dirección">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Descripción</label>
                                        <div class="col-sm-9">
                                            <textarea name="descripcion" value="{{  $NegocioEdit->description }}" class="form-control"> {{  $NegocioEdit->description }}</textarea>
                                        </div>

                                    </div> 



                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Logo empresa</label>
                                        <div class="col-sm-9">
                                        <input   type="file" name="logoempresa" id="logoempresa" class="form-control">

                                            <br><b>  Limite de 3 MB por logo<br>
                                            Tipos permitidos: jpeg, png, jpg, gif, svg;</b>
                                            <br>
             
                                            <div class="row">
                                                @if($NegocioEdit->logo_company!='')
                                                <img  style="height: 150px; width: 150px" src="{{asset('imagenes/logos/'.$NegocioEdit->logo_company)}}"  class="rounded-circle">
                                                @else
                                                <img  style="height: 100px; width: 100px" src="https://media3.giphy.com/media/H7ICu2zHH36JvxVlnn/giphy.gif"  class="rounded-circle">
                                                @endif
                                            </div>


                                        </div>
                                    </div>


                                </div>

  <div class="card card-primary"> 
    <div class="card-header">
            <h3 class="card-title">Ubicación del Negocio, mueva el marcador</h3>
          </div>
                <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                <div class="card-body">
                    <style>     
                        #map {
                                height: 250px; 
                                width: 100%;
                        }
                        #coords{width: 50px;}
                        </style>
                        <div id="map"></div>
                        
                <div class="col-md-9">
                    <div class="form-group">
                    <input readonly type="text" name="latitud" id="lat" class="form-control" placeholder="pulse el marcador para que este se campo se llene automaticamente(Latitud)">      
                    <input readonly type="text" name="longitud" id="longi" class="form-control" placeholder="pulse el marcador para que este se campo llene se automaticamente(Longitud">
                    </div>
                    </div>
                <script>
            
            var marker;          //variable del marcador
            var coords = {};    //coordenadas obtenidas con la geolocalización
            
            //Funcion principal
            initMap = function () 
            {
                //usamos la API para geolocalizar el usuario
                    navigator.geolocation.getCurrentPosition(
                      function (position){
                        coords =  {
                          lng: position.coords.longitude,
                          lat: position.coords.latitude
                        };
                        setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa
                      },function(error){console.log(error);});   
            }
            
            function setMapa (coords)
            {   
                  //Se crea una nueva instancia del objeto mapa
                  var map = new google.maps.Map(document.getElementById('map'),
                  {
                    zoom: 14,
                    center:new google.maps.LatLng(coords.lat,coords.lng),
                  });
                  //Creamos el marcador en el mapa con sus propiedades
                  //para nuestro obetivo tenemos que poner el atributo draggable en true
                  //position pondremos las mismas coordenas que obtuvimos en la geolocalización
                  marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: new google.maps.LatLng(coords.lat,coords.lng),
            
                  });
                  //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
                  //cuando el usuario a soltado el marcador
                  marker.addListener('click', toggleBounce);
                  marker.addListener( 'dragend', function (event)
                  {
                    //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
                    //document.getElementById("coords").value = "lat:"+this.getPosition().lat()+",log:"+ this.getPosition().lng();
                    //escribo las coordenadas, latitud y longitud y se las envio al input por su id
                    document.getElementById("lat").value = this.getPosition().lat();
                    document.getElementById("longi").value = this.getPosition().lng();
                  });
            }
            //callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
            function toggleBounce() {
              if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
              } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
              }
            }
            // Carga de la libreria de google maps 
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW_p10NjPm2ru42ZNu_Oj-UgdV1BVcZuc&callback=initMap"></script>
        </div>
        </div>
            <!-- /.row -->
          <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="submit" readonly value="Editar Negocio" class="btn btn-info float-right">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
       </div>
     <!-- /.card-body -->
     </form>
    </div>

@endsection
