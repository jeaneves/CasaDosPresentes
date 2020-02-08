@extends('layouts.base')

@section('main')
<br><br><br><br><br>

<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
<section class="bg0 p-t-23 p-b-140">
<div class="p-b-10">
	<h3 class="ltext-103 cl5">
		{{$categoria->nome}}
	</h3>
</div>
</section>
	<div class="container">
		<div class="row">
   		    @if($listas)
       			@foreach($listas as $list)
			    	<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
          				<div class="block1 wrap-pic-w">
					    	<img src="{{asset('$list->imagem')}}" alt="IMG-BANNER">
							<a href="#" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-01 respon3">
					    	    <div class="block1-txt-child1 flex-col-l">
								   	<span class="block1-name ltext-102 trans-04 p-b-8">
										{{ $list->nomelista}}
								   	</span>
								  	<span class="block1-info stext-102 trans-04">
								    	acessar
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
@endsection