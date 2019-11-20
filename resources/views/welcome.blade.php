<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"  />
<!--===============================================================================================-->	
	    <link rel="icon" type="image/png"      href="{{ asset('images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
    	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
        <title>lista casamento</title>
    </head>
    
    <body class="animsition">
        <!-- Header -->
	    <header>
		    <!-- Header desktop -->
		    <div class="container-menu-desktop">
			
			    <div class="wrap-menu-desktop">
				    <nav class="limiter-menu-desktop container">
					    <!-- Logo desktop -->		
					    <a href="{{ url('/') }}" class="logo">
						    <img src="images/icons/logo-01.png" alt="IMG-LOGO">
					    </a>	
                        <!-- Icon header -->
                        <div class="wrap-icon-header flex-w flex-r-m">
                            <!-- Menu desktop -->
                        	<div class="menu-desktop">
                            	<ul class="main-menu">
                                	<li class="active-menu">
										@if (Route::has('login'))
											<div class="top-right links">
												@auth
													<a href="{{ url('/listas') }}">Listas de Presentes |</a>
												@else
													<a href="{{ route('login') }}">Acessar |</a>
													@if (Route::has('register'))
														<a href="{{ route('register') }}">Criar cadastro</a>
													@endif
												@endauth
										@endif
									</li>
                            	</ul>
					    	</div>
                        </div>
				    </nav>
			    </div>
		    </div>

			<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					@if (Route::has('login'))
						<div class="top-right links">
							@auth
								<a href="{{ url('/listas') }}">Listas de Presentes |</a>
								@else
									<a href="{{ route('login') }}">Acessar |</a>
									@if (Route::has('register'))
										<a href="{{ route('register') }}">Criar cadastro</a>
									@endif
							@endauth
					@endif
				</li>
			</ul>
		</div>
			
	    </header>
		<section class="section-slide">
			<div class="item-slick1" style="background-image: url(images/slide-02.jpg);">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span class="ltext-101 cl2 respon2">
								Casa dos Presentes
							</span>
						</div>
						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								Chá de cozinha
							</h2>
						</div>
						<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
							<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								ACESSAR
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Product -->
  
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Produtos
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Todos os produtos
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".cozinha">
						Cozinha
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Eletro
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
						Decoração
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
						Mesa e Acessórios
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
						Bar
					</button>
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
						Lavanderia
					</button>
				</div>

			</div>

			<div class="row isotope-grid">
      @if ($produtos)
        @foreach ($produtos as $P)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item cozinha">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-02.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Ver
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{ $P->nome_prod }}
								</a>

								<span class="stext-105 cl3">
									{{$P->preco_vend }}
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
        @endforeach
        @endif

		</div>
	</section>
        <!-- Footer -->
	    <footer class="bg3 p-t-75 p-b-32">
		    <div class="container">
			    <div class="row">
				    <!-- <div class="col-sm-6 col-lg-3 p-b-50">
					    <h4 class="stext-301 cl0 p-b-30">
						    Ajuda
					    </h4>
    					
                        <ul>
	    					<li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Acompanhar lista</a></li>
                            <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04"><1!-- Returns  --/></a></li>
    						<li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04"><1!-- Shipping --/></a></li>
                            <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">FAQs</a></li>
                        </ul>
				    </div> -->
    				<div class="col-sm-6 col-lg-3 p-b-50">
					    <h4 class="stext-301 cl0 p-b-30">Entrar em contato</h4>
                        <p class="stext-107 cl7 size-201">
						    <!-- Colocar isso como parametro -->
						    RUA SÃO FRANCISCO, 176 Penápolis/SP  (18)3652-3771 ou (18) 99138-0048  sac@casadospresentesshop.com.br
					    </p>
					    
                        <div class="p-t-27">
						    <a href="https://www.facebook.com/casadospresentesshop/" target="_blank " class="fs-18 cl7 hov-cl1 trans-04 m-r-16"><i class="fa fa-facebook"></i></a>
						    <a href="https://www.instagram.com/casadospresentesshop" target="_blank" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCWeAzCrQ6BYasVDJjvJqGEQ" target="_blank" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"><i class="fa fa-youtube"></i></a>
					    </div>
				    </div>
    
    				<div class="col-sm-6 col-lg-3 p-b-50">
	    				<h4 class="stext-301 cl0 p-b-30">Novidades</h4>
                        
                        <form>
                            <div class="wrap-input1 w-full p-b-4">
							    <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							    <div class="focus-input1 trans-04"></div>
						    </div>
    					
                        	<div class="p-t-18">
							    <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">Inscreva-se</button>
						    </div>
					    </form>
				    </div>
			    </div>
                
                <div class="p-t-40">
				    <div class="flex-c-m flex-w p-b-18">
					    <a href="#" class="m-all-1"><img src="images/icons/icon-pay-01.png" alt="ICON-PAY"></a>
                        <a href="#" class="m-all-1"><img src="images/icons/icon-pay-02.png" alt="ICON-PAY"></a>
                        <a href="#" class="m-all-1"><img src="images/icons/icon-pay-03.png" alt="ICON-PAY"></a>
                        <a href="#" class="m-all-1"><img src="images/icons/icon-pay-04.png" alt="ICON-PAY"></a>
                        <a href="http://www.clearsale.com.br" class="m-all-1"> <br> <p> <img src="images/icons/clearsale.png" alt="ICON-PAY"></a>
                    </div>
				    
                    <p class="stext-107 cl6 txt-center">
					    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				 	    Jean&copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Feito por <i class="fa fa-circle-o" aria-hidden="true"></i> <a href="#" target="_blank">Xcom Sistemas</a> &amp; distribuido por <a href="" target="_blank">Jean</a>
					    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    				</p>
	    		</div>
		    </div>
	    </footer>
		<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Adicionar na lista
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
        <!--===============================================================================================-->	
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/parallax100/parallax100.js') }}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
