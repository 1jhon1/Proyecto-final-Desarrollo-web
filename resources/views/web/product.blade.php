<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>products</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/fav.ico">
		<!--stylesheet include-->




		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/css/camera.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/css/owl.carousel.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/css/owl.transitions.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/css/jquery.custom-scrollbar.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/css/style.css') }}">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	

		</style>
		<script src="js/modernizr.js"></script>
	</head>
	<body>
		<!--boxed layout-->
		<div class="boxed_layout relative w_xs_auto">
			<!--[if (lt IE 9) | IE 9]>
				<div style="background:#fff;padding:8px 0 10px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--markup header-->
			
			<header role="banner">
				<section class="h_bot_part container">
					<div class="clearfix row">
						<div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
							<a href="index.html" class="logo m_xs_bottom_15 d_xs_inline_b">
								<img src="images/logo.png" alt="">
							</a>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-8 t_align_r t_xs_align_c">
							<ul class="d_inline_b horizontal_list clearfix t_align_l site_settings">
							
								<li class="m_left_5 relative container3d" id="shopping_button">
									<a role="button" href="#" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
										<span class="d_inline_middle shop_icon m_mxs_right_0">
											<i class="fa fa-shopping-cart"></i>
											<span class="count tr_delay_hover type_2 circle t_align_c" id="totalll">0</span>
										</span>
										<b class="d_mxs_none">carrito</b>
									</a>
									<div class="shopping_cart top_arrow tr_all_hover r_corners">
										<div class="f_size_medium sc_header">Detalle del pedido</div>

			<ul id="top_menu">
				<li  class="dropdown">
                    
                    <div style="padding:0px;" id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                   
                        <table id="lista-carrito" class="table" style="width:100%;">
                            <thead style="background:#679747; color:white;">
                                <tr>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th></th>
                                </tr>
                            </thead>
                             <tbody></tbody>
                        </table>
                        <div style="margin-bottom:20px;" align="center">
                        <a style="background:#679747; color:white; padding:5px; border-radius:5px;" href="#" id="vaciar-carrito" class="place-order ">Vaciar Carrito</a>
                        <a style="background:#679747; color:white; padding:5px; border-radius:5px;" href="#" id="procesar-pedido" class="place-order ">Procesar</a>
                        </div>
                    </div>
            </li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</section>
			</header>
			<!--slider-->
			
			<div >
			<center>
			<img style="border-radius:15px;" width="600px" height="320px" src="{{asset('imagenes/logos/'.$Tienda->logo_company)}}" data-src="{{asset('imagenes/logos/'.$Tienda->logo_company)}}" alt="" class="lazy">
			</center>
			</div>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">Todos los productos <b>{{ $Tienda->name_store }}</b></h2>
					<!--filter navigation of products-->
					<ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
						<li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">Todos los productos</button></li>
						<li  class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><a href="/" class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none">Todas las Tiendas</a></li>


					</ul>















					<div style="background-color: rgba(32, 82, 0 , 0.2);" class="container-fluid">
            <div class="container margin_60_40"  id="lista-productos">
                <div class="row">

					@foreach($productosTienda as  $protienda)
                    <div class="col-md-6">
                        <div style="background:white; border-radius:15px; border-color:black !import;" class="list_home">
                            <ul class="product-item">
                                <li class="product-inner">
                                        <figure>


                                            <img style="border-radius:15px;" width="380px" height="380px" src="{{asset('imagenes/productos/'.$protienda->imagen)}}" data-src="{{asset('imagenes/productos/'.$protienda->imagen)}}" alt="" class="lazy">

									    </figure>
                                        <div class="score">
                                            @if($protienda->descuento > 0)
                                            <strong style="color: green;"><s style="color: red;"> $ {{ $protienda->precio_anterior }}</s> <br> $ {{ $protienda->precio_actual }}</strong></div>
                                            @endif
                                            @if($protienda->descuento <= 0)
                                            <strong style="color: green;">$ {{ $protienda->precio_actual }}</strong></div>
                                            @endif
                                           
                                            <div style="display:none;">
                                                <img src="{{asset('imagenes/productos/'.$protienda->imagen)}}" width="1px" height="1px" alt="">
                                                <small style="font-size: 0px">{{ $protienda->idtienda }}</small>
                                                <h4 class="title" style="font-size: 0px">{{ $protienda->nombre }}</h4>
                                                <h5   class="precio" style="font-size: 0px"><span class="">{{ $protienda->precio_actual }}</span></h5>
                                            </div>
                                        <h3>{{ $protienda->nombre }}</h3>
                                        

                                        <center><a style="background:#679747; color:white; padding:5px; border-radius:5px;" herf="#" class="agregar-carrito" data-id="{{ $protienda->id }}">Añadir</a></center><br>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /row -->
    </div>
  




	<div class="row clearfix m_bottom_45 m_sm_bottom_35">
						<div class="col-lg-12 col-md-9 col-sm-12 m_sm_bottom_35 blog_animate animate_ftr">


					<!--banners-->
					<div class="row clearfix">
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_3.png" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b> Satifacción 100%</b><br><span class="color_dark">Garantizada</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_4.png" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>Envio Gratis</b><br><span class="color_dark">En todos los productos</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="#" class="d_block animate_ftb h_md_auto banner_type_2 r_corners orange t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_5.png" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>Grandes </b><br><span class="color_dark">Ofertas diarias!</span>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>

		


<!-- jQuery JS -->
<script src="{{ asset('vista/assets/js/vendor/jquery-3.4.1.min.js') }}"></script>

<!--=========carrito de compra======================-->
<script src="{{ asset('vista/assets/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('vista/assets/js/carrito.js') }}"></script>
<script src="{{ asset('vista/assets/js/pedido.js') }}"></script>
			<!--markup footer-->
			<footer id="footer">
			
				<!--copyright part-->
				<div class="footer_bottom_part">
					<div class="container clearfix t_mxs_align_c">
						<p class="f_left f_mxs_none m_mxs_bottom_10">&copy; Universidad de cordoba 2020 <span class="color_light"></span>Todos los derechos reservados</p>
					
					</div>
				</div>
			</footer>
		</div>
		<button class="t_align_c r_corners tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="{{ asset('web/js/jquery-2.1.0.min.js') }}"></script>
		<script src="{{ asset('web/js/jquery-migrate-1.2.1.min.js') }}"></script>
		<script src="{{ asset('web/js/retina.js') }}"></script>
		<script src="{{ asset('web/js/camera.min.js') }}"></script>
		<script src="{{ asset('web/js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('web/js/waypoints.min.js') }}"></script>
		<script src="{{ asset('web/js/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('web/js/jquery.tweet.min.js') }}"></script>
		<script src="{{ asset('web/js/jquery.custom-scrollbar.js') }}"></script>
		<script src="{{ asset('web/js/scripts.js') }}"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
	</body>
</html>

