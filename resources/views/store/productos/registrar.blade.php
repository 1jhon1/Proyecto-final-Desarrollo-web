@extends('layouts.admin2')
@section('contenido')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


        <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Datos del negocio</h4>

                    @if (count($errors)>0)  <!-- si tengo mas de un error -->
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        </ul>
      </div>
      @endif

                     <form action="{{ url('producto/register') }}" enctype="multipart/form-data" method="post">
                     @csrf
                     <div id="app">

                                    <div class="form-group row">
                                        <label for="nombre" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nombre" value="" placeholder="Nombre...">
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Cantidad</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="cantidad" value="" placeholder="Cantidad...">
                                        </div>
                                    </div>



                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Precio Anterior</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" v-model="precioanterior" name="precio_anterior" value="" placeholder="Precio Anterior...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Precio Actual</label>
                                        <div class="col-sm-9">
                                            <input readonly type="number" v-model="precioactual" class="form-control" name="precio_actual" value="" placeholder="Precio Actual">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Descuento en %</label>
                                        <div class="col-sm-9">
                                            <input type="number" v-model="porcentajededescuento"  class="form-control" name="descuento" value="" placeholder="Descuento">
                                            <span  class="badge btn-success" id="descuento">
                                        <!--llamamos a una funcion computada-->
                                          @{{ generardescuento }}
                                        </span>
                                        </div>
                                    </div>
 

                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Descripcion</label>
                                        <div class="col-sm-9">
                                        <textarea name="description" value="" class="form-control"> </textarea>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Imagen del producto</label>
                                        <div class="col-sm-9">
                                        <input   type="file" name="imagen"  class="form-control">

                                            <br><b>  Limite de 3 MB por logo<br>
                                            Tipos permitidos: jpeg, png, jpg, gif, svg;</b>
                                            <br>
             

                                        </div>
                                    </div>



                                </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <input type="submit" value="Registrar Productos" class="btn btn-info float-right">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                </div>
                                </div>  

                                <!-- /.card-body -->
                    </form>
                    </div>

                </div>
         </div>                           

@endsection

