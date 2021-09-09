@extends('layouts.web')
@section('content')

<style>
.contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
}
 
.texto-encima{
    position: absolute;
    top: 10px;
    left: 10px;
}
.centrado{
    position: absolute;
    top: 95%;
	left: 40%;
	font-size: 30px;
    transform: translate(-50%, -50%);
}
</style>


    <section class="hero-wrap">
		<div class="home-slider owl-carousel js-fullheight">
			<div class="slider-item js-fullheight" style="background-image:url(asset/images/bg_1.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Tiendas</h2></span>
								<h1>Pide tu domicilio</h1>
								<span class="subheading-2">todo sobre la canasta familiar</span>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="slider-item js-fullheight" style="background-image:url(asset/images/bg_2.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Servicio</h2></span>
								<h1>Mejor calidad</h1>
								<span class="subheading-2 sub">Comida</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

        <br><br>
			<div class="row justify-content-center mb-1 pb-2">
						<div class="col-md-7 text-center heading-section ftco-animate">
							<span class="subheading">Toda la comida que amas,
								a domicilio.
								</span>
							<h2 class="mb-4">Todas nuestras tiendas</h2>
						</div>
					</div>
			<section class="ftco-section ftco-no-pt ftco-no-pb">

			@foreach($store as  $store)
				<div class="container">
				<div class="row d-flex">
					<div class="col-md-6 d-flex">
					<img class="menu-img img" width="340" height="340" src="{{asset('imagenes/logos/'.$store->logo_company)}}"></img>
				</div>
				<div class="col-md-6 ftco-animate makereservation p-4 p-md-1">
					<div class="heading-section ftco-animate mb-1">
						@if($store->status_business=='abierto')
					<span class="subheading" style="color:green">{{ $store->status_business   }} </span><br>
                       @else
					<span class="subheading">{{ $store->status_business   }} </span><br>
					@endif
					<h3 class="mb-4">{{ $store->type_business }} {{  $store->name_store}}</h3>
					<p>{{ $store->description  }}
					</p>
					
					<p>{{ $store->direction  }} - {{ $store->city  }}</p>
					<a  href="https://api.whatsapp.com/send?phone=57{{ $store->num_phone  }}&amp;text=Bienvenidos%20a%20{{  $store->name_store}}%20que%20deseas%20pedir?" target="_blank" rel="noopener"><img class="botonF1" width="60" height="60"  src="https://franciempanadas.com/assets/images/ws2.png" alt="icono"></a>
					<p>
					<button type="button" class="btn btn-outline-success"><a href="" style="color:green"  data-target="#modal-horario-{{ $store->id }}" data-toggle="modal"  title="Horarios de atencion">Horarios atención</a></button>

					<a href="https://www.google.com/maps/search/?api=1&query={{$store->latitud}},{{$store->longitud}}" class="btn btn-outline-primary">Como llegar</a>  
				
					<button type="button" class="btn btn-outline-warning"><a href="{{url('viewproduct/returnProductStore',$store->id_users) }}">Visitanos</a></button>
      				</p>
 

					</div>
				</div>
				</div>
				</div>
				@include('web.modalhorario')
				<hr>
				@endforeach
				</section>

    @endsection

