@extends('layouts.admin2')
@section('contenido')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


        <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Datos del negocio</h4>
         
                     <div id="app">

                                    <div class="form-group row">
                                        <label for="nombre" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input readonly type="text" class="form-control" name="nombre" value="{{ $producto->nombre}}" placeholder="Nombre...">
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Cantidad</label>
                                        <div class="col-sm-9">
                                            <input readonly type="number" class="form-control" name="cantidad" value="{{ $producto->cantidad}}" placeholder="Cantidad...">
                                        </div>
                                    </div>



                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Precio Anterior</label>
                                        <div class="col-sm-9">
                                            <input readonly type="number" class="form-control"  name="precio_anterior" value="{{ $producto->precio_anterior}}" placeholder="Precio Anterior...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Precio Actual</label>
                                        <div class="col-sm-9">
                                            <input readonly type="number" class="form-control" name="precio_actual" value="{{ $producto->precio_actual}}" placeholder="Precio Actual">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Descuento en %</label>
                                        <div class="col-sm-9">
                                            <input readonly type="number"   class="form-control" name="descuento" value="{{ $producto->descuento}}" placeholder="Descuento">
                                            <span  class="badge btn-success" id="descuento">
                                        <!--llamamos a una funcion computada-->
                                        </span>
                                        </div>
                                    </div>
 

                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Descripcion</label>
                                        <div class="col-sm-9">
                                        <textarea readonly name="description"  class="form-control"> {{ $producto->description}}</textarea>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Imagen del producto</label>
                                        <div class="col-sm-9">
             
                                     <img  style="height: 400px; width: 400px" src="{{asset('imagenes/productos/'.$producto->imagen)}}"class="rounded-circle">

                                        </div>
                                    </div>



                                </div>  
                    </div>

                </div>
         </div>                           

@endsection

