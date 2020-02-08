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

		<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
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
						    <img src="{{asset('images/icons/logo-01.png')}}" alt="IMG-LOGO">
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
													<a href="{{ route('login') }}">Acessar Lista de Presentes |</a>
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
				<a href="index.html"><img src="{{asset('images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
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
			


        @yield('main')


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
					    <a href="#" class="m-all-1"><img src="{{asset('images/icons/icon-pay-01.png')}}" alt="ICON-PAY"></a>
                        <a href="#" class="m-all-1"><img src="{{asset('images/icons/icon-pay-02.png')}}" alt="ICON-PAY"></a>
                        <a href="#" class="m-all-1"><img src="{{asset('images/icons/icon-pay-03.png')}}" alt="ICON-PAY"></a>
                        <a href="#" class="m-all-1"><img src="{{asset('images/icons/icon-pay-04.png')}}" alt="ICON-PAY"></a>
                        <a href="http://www.clearsale.com.br" class="m-all-1"> <br> <p> <img src="{{asset('images/icons/clearsale.png')}}" alt="ICON-PAY"></a>
                    </div>
				    
                    <p class="stext-107 cl6 txt-center">
					    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				 	    Jean&copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Feito por <i class="fa fa-circle-o" aria-hidden="true"></i> <a href="#" target="_blank">Xcom Sistemas</a> &amp; distribuido por <a href="" target="_blank">Jean</a>
					    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    				</p>
	    		</div>
		    </div>
	    </footer>
		
		<div id="div-modal ">
		</div>


	<script>
	
</script>
<script>
        $(document).on('click', '#btn-edit', function () {
            OpenModal($(this).data('url'), '#div-modal');
        });

		function OpenModal(url, div) {
            $.ajax({
                type: "GET",
                url: url,
                success: function (data) {
                    $(div).html(data);
                },
                complete: function () {
                    //CompletoSemMensagem();
                },
                beforeSend: function () {
                    //Carregando();
                },
                error: function () {
                    //Falha();
                }
            });
            return false;
    
        }
</script>
		

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
        <!--===============================================================================================-->	

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
