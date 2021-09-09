@extends('layouts.admin')
@section('contenido')
                                            
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <div id="main-wrapper">
    
            <div class="container-fluid">


            
                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-body">

                            @if( session('estado'))
                            <script>
                            Swal.fire(
                            'Exitoso',
                            'Estado actualizado',
                            'success'
                            )
                            </script>      
                            @endif

                                <h5 class="card-title">Listado de los productos del Negocio</h5>
                                <a type="button" href="{{ url('producto/create') }}" class="btn btn-outline-success">Registrar</a>
                                <br>
                                   <form>
                                        <div class="input-group input-group-sm" style="width: 350px; height: 40px;">
                                        <input type="text" name="nombre" class="form-control float-right" placeholder="Buscar..." value="{{ request()->get('nombre') }}">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                        </div>
                                </form><br>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                               <th>Id</th>
                                               <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Precio</th>
                                                <th>Estado</th>
                                                <th colspan="3">Opciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        
                                        @foreach($producto as $pro)
                                        <tr>
                                               <td>{{ $pro->id }}</td>
                                               <td>
                                               <a title="{{ $pro->nombre }}"><img  style="height: 100px; width: 100px" src="{{asset('imagenes/productos/'.$pro->imagen)}}" alt="{{ $pro->nombre }}" class="rounded-circle"></a>
                                               </td>
                                                <td>{{ $pro->nombre }}</td>
                                                <td>{{ $pro->description }}</td>
                                                <td>{{ $pro->precio_actual }}</td>
                                                @if($pro->estado==1)
                                                <td> <span class="badge btn-success">Activo</span></td>
                                                @else
                                                <td> <span class="badge btn-danger">Inactivo</span></td>
                                                @endif

                                                <td>
                                                <a type="button" href="{{ url('producto/show',$pro->id) }}" class="btn btn-outline-primary"><i class="fas fa-eye"></a>
                                                </td>
                                                <td><a type="button"    class="btn btn-outline-warning"><i class="fas fa-edit"></i></a></td>
                                                <td><a  hrfe="" type="button" class="btn btn-outline-danger" data-target="#modal-estado-{{ $pro->id }}" data-toggle="modal" ><i class="fas fa-trash-alt"></i></a></td>
                                            </tr>
                                            @include('store.productos.modalestado')   

                                            @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                               <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Precio</th>
                                                <th>Estado</th>
                                                <th colspan="3">Opciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                {{ $producto->appends($_GET)->links() }}

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</body>

</html>
@endsection
