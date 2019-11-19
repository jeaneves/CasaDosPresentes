@extends('layouts.base')

@section('main')
  <!-- Slider -->
  
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1 ">
				@if($categorias)
					@foreach($categorias as $cat)
					<div class="item-slick1" style="background-image: url(images/slide-003.jpg);">
							<div class="container h-full">
								<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
									<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
										<span class="ltext-101 cl2 respon2 collor" style="color:white;" > 
											Casa dos Presentes
										</span>
									</div>
								
									<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
										<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" > <!-- style="color:b;" -->
											{{ $cat->nome}}
										</h2>
									</div>
								
									<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
										<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-02" style="color:white;">
											ACESSAR
										</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</section>
	<!-- Slider -->	
	
	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
    		    @if($categorias)
          			@foreach($categorias as $cat)
				    	<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
              				<div class="block1 wrap-pic-w">
						    	<img src="{{$cat->imagem}}" alt="IMG-BANNER">
                  				<a href="#" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-01 respon3">
							    	<div class="block1-txt-child1 flex-col-l">
								    	<span class="block1-name ltext-102 trans-04 p-b-8">
											{{ $cat->nome}}
								      	</span>
								      	<span class="block1-info stext-102 trans-04">
									    	Listas
								      	</span>
							      	</div>
                    				<div class="block1-txt-child2 p-b-4 trans-05">
								    	<div class="block1-link stext-101 cl0 trans-09">
									    	Acessar 
								      	</div>
							      	</div>
						      	</a>
					    	</div>
				    	</div>
          			@endforeach
        		@endif
			</div>
		</div>
	</div> <!-- Banner -->

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

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
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
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-02.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-05 js-show-modal1">
								Ver Produto
							</a>
							<button id="btn-edit" type="button"
                                                    data-url="{!! route('produto.detalhe', ['id' => 1]) !!}"
                                                    class="btn btn-success btn-rounded btn-outline">Ver / Editar
                                            </button>      
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

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
		</div>


		<div id="div-modal"></div>
	</section>


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
@endsection