@extends('layouts.base')

@section('main')
<!-- Slider -->
  
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1 ">
				@if($categorias)
					@foreach($categorias as $cat)
					<div class="item-slick1" style="background-image: url({{asset('images/slide-003.jpg')}});">
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

    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
        <!--form do cadastro-->
            <div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Cadastrar lista
				</h3>
			</div>
            <div class="card-body card-block">
                    <form method="post" class="" action="{{ route('listas.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="hidden" id="datacadastro" name="datacadastro" value="<?php echo date('Y-m-d'); ?>">
                        
                        <div class="form-group col-md-4">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="1">Casamento</option>
                                <option value="2">Chá</option>
                                <option value="3">Casa nova</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <!-- <div class="input-group-addon"><i class="fa fa-id-card-o"></i></div> -->
                                <input type="text" id="nome" name="nome" placeholder="Nome da lista" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <!-- <div class="input-group-addon"><i class="fa fa-file-text-o"></i></div> -->
                                <input type="text" id="texto" name="texto" placeholder="Descricao da lista" class="form-control">
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="dataevento">Datado evento</label>
                                <input type="date" id="dataevento" name="dataevento" placeholder="Data do evento" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                            </div>

                            
                            <div class="form-group col-md-4">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" placeholder="(XX)XXXX-XXXX" id="telefone" name="telefone" >
                            </div>

                            <div class="form-group col-md-4">
                                <label for="telefone_dois">Segundo Telefone</label>
                                <input type="text" class="form-control" placeholder="(XX)XXXX-XXXX" id="telefone_dois" name="telefone_dois" >
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" placeholder="Ex: Penápolis" id="cidade" name="cidade" >
                            </div>

                            <div class="form-group col-md-4">
                                <label for="rua">Endereço</label>
                                <input type="text" class="form-control" placeholder="Ex: Rua: Dr José Coelho Jr" id="rua" name="rua" >
                            </div>

                            <div class="form-group col-md-1">
                                <label for="numero">Número</label>
                                <input type="text" class="form-control" placeholder="Ex: 12345" id="numero" name="numero" >
                            </div>

                            <div class="form-group col-md-2">
                                <label for="bairro">Bairro </label>
                                <input type="text" id="bairro" name="bairro" placeholder="Ex: Jardim Paulista " class="form-control">
                            </div>

                            <div class="form-group col-md-1">
                                <label for="uf">UF</label>
                                <select name="uf" id="uf" class="form-control">
                                    <option value=""></option>
                                    <option selected value="SP">SP</option>
                                    <option value="RJ">RJ</option>
                                    <option value="MT">MT</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="cep">CEP </label>
                                <input type="text" id="cep" name="cep" placeholder="00000-000" class="form-control">
                            </div>
                            
                            <div class="">
                                <label for="imagem">Foto </label>
                                <input type="file" id="foto" name="foto" class="form-control">
                            </div>

                        </div>

                        <div class="form-actions form-group"><button type="submit" class="btn btn-outline-success ">Salvar</button></div>
                    </form>
                </div>

         <!--form do cadastro-->   
        </div>
    </section>
   
    <script type="text/javascript">
        $("#telefone,#telefone_dois, #celular").mask("(00) 0000-0000");
        $("#cep").mask("00000-000")
    </script>

@endsection