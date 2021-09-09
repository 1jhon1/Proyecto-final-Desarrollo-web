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
			

			<!--slider-->
			
			<div>
			<center>
			<img style="border-radius:15px;" width="600px" height="320px" src="https://as.com/meristation/imagenes/2019/06/25/betech/1561468911_324129_1561469448_noticia_normal.jpg" data-src="https://as.com/meristation/imagenes/2019/06/25/betech/1561468911_324129_1561469448_noticia_normal.jpg" alt="" class="lazy">
			</center>
			</div>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
						<li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><a href="{{ URL::previous() }}" class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">Atras</a></li>
						<li  class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><a href="/" class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none">Todas las Tiendas</a></li>


					</ul>


                    <!---body-->
  <form id="procesar-pago" action="{{ url('viewproduct/enviarpedidowhatsapp')  }}" method="post">
  @csrf


  



                <div class="col-md-6 col-12 mb-5">
                    <label>Direccion*</label>
                    <input type="text" name="direccion" id="direccion" placeholder="Direccion..." value="{{old('direccion')}}">
                    @if ($errors->has('direccion'))
                        <span class="help-block">
                                <strong style="color:red">{{ $errors->first('direccion') }}</strong>
                         </span>
                         @endif
                   </div> 




                <div class="col-md-6 col-12 mb-5">
                    <label>Nombre completo*</label>
                    <input type="text" name="namewhatsapp" id="namewhatsapp" placeholder="Nombre..." value="{{old('namewhatsapp')}}">
                    @if ($errors->has('namewhatsapp'))
                        <span class="help-block">
                                <strong style="color:red">{{ $errors->first('namewhatsapp') }}</strong>
                         </span>
                         @endif
                   </div> 





                <div class="col-md-6 col-12 mb-5">
                    <label>Telefono*</label>
                    <input type="text" name="telefono" id="telefono" placeholder="Direccion..." value="{{old('telefono')}}">
                    @if ($errors->has('telefono'))
                        <span class="help-block">
                                <strong style="color:red">{{ $errors->first('telefono') }}</strong>
                         </span>
                         @endif
                   </div> 



                <div class="col-md-6 col-12 mb-5">
                    <label>Observacion*</label>
                    <input type="text" name="observacionwhatsapp" id="observacionwhatsapp" placeholder="Observacion..." value="{{old('observacionwhatsapp')}}">
                    @if ($errors->has('observacionwhatsapp'))
                        <span class="help-block">
                                <strong style="color:red">{{ $errors->first('observacionwhatsapp') }}</strong>
                         </span>
                         @endif
                   </div> 


                   <div class="col-md-6 col-12 mb-5">
                       <label>Forma de pago*</label>
                       <select name="formadepago" class="form-select">
                            <option value="efectivo">EFECTIVO</option>
                            <option value="bancolombia">BANCOLOMBIA</option>
                            <option value="nequi">NEQUI</option>
                            <option value="datafono">DATAFONO</option>       
                       </select>
                    </div>






     <div class="row justify-content-center">
    <!-- Cart Total -->
     <div style="border-radius:20px; background:white;" class="col-md-8 mb-40">
        <h4 style="padding:20px; color:green;" align="center" class="checkout-title">PRODUCTOS AGREGADOS AL CARRITO</h4>
        <!-- <div class="">       -->
          
         <div class="container-fluid">
             <div class="mt-3">
                 <div class="">   
                         <!-- Page Section Start -->
                         <div class="">
                             <div class="row">
                                 <!-- <div class="section-title text-center mb-30"> -->
                                    <div class="row mbn-40" id="carrito">
                                        <div class="col-12 mb-40">
                                            <div class="cart-table table-responsive" >
                                                <table id="lista-compra" >
                                                    <thead>
                                                        <tr>
                                                    <th class="pro-thumbnail">Imagen</th>
                                                    <th class="pro-title">Producto</th>
                                                    <th class="pro-price">Precio</th>
                                                    <th class="pro-quantity">Cantidad</th>
                                                    <th class="pro-subtotal">Subtotal</th>
                                                    <th class="pro-remove">Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                            <tr>
                                                <th colspan="4" scope="col" class="text-right">Subtota:</th>
                                                <th scope="col">
                                                    <p id="subtotal"></p>
                                                </th>
                                                <!-- <th scope="col"></th> -->
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="col" class="text-right">Impuesto:</th>
                                                <th scope="col">
                                                    <p id="igv"></p>
                                                </th>
                                                <!-- <th scope="col"></th> -->
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="col" class="text-right">Total:</th>
                                                <th scope="col">
                                                <p><input id="total" readonly> </p>
                                                </th>
                                                    <!-- <th scope="col"></th> -->
                                            </tr>
                                        </table>
                                     </div>
                                  </div>
                            </div>
                         </div><!-- Page Section End -->
                 </div>
             </div>
                    

             <div class="col-12 mb-40">
                 <div class="checkout-payment-method">
                   



                 </div>
                 <div style="margin-bottom:20px;" class="col-md-12 row justify-content-center">
                    <button href="" style="color:green; font-size:15px;" class="place-order botones text-center" id="procesar-compra">confirmar compra</button>
                           
                     </div>
                    
                 </div>
             </div>
         </div>
     </div>
 </div>
</form>


                    <!--end body-->


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
<script src="{{ asset('vista/assets/js/compra.js') }}"></script>

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

