@extends('layouts.admin')
@section('contenido')

            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi-cart"></i></h1>
                                <h6 class="text-white">Pedidos Pendiente</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi-cart-outline"></i></h1>
                                <h6 class="text-white">Pedidos </h6>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi-format-text"></i></h1>
                                <h6 class="text-white">Pedidos</h6>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>



@endsection
