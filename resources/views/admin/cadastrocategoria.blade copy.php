@extends('layouts.adminbase')

@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    <div class="container">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Cadastro de Categoria</div>
                <div class="card-body card-block">
                    <form action="" method="post" class="" action="{{ route('categoria.store') }}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-id-card-o"></i></div>
                                <input type="text" id="nomecategoria" name="nome" placeholder="Nome Categoria" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-file-text-o"></i></div>
                                <input type="text" id="descricao" name="descricao" placeholder="Descricao Categoria" class="form-control">
                                
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-camera-retro"></i></div>
                                <input type="text" id="imagemslide" name="imagem_slide" placeholder="Imagem do Slide" class="form-control">
                                <button><i class="fa fa-cloud-upload"></i></button>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-picture-o"></i></div>
                                <input type="text" id="imagembanner" name="imagem" placeholder="Imagem do Banner" class="form-control">
                                <button><i class="fa fa-cloud-upload"></i></button>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="MostraSlide" class="control-label mb-1">Aparece Slide</label>
                            
                            <label class="switch switch-text switch-primary switch-pill" >
                                <input type="checkbox" name="apareceslide" class="switch-input" checked="1" value="1" {{ old('apareceslide') ? 'checked="checked"'  :  '' }}> 
                                 <span data-on="Sim" data-off="Não" class="switch-label"></span> 
                                 <span class="switch-handle"></span>
                                

                            </label>
                        </div>
                        
                        <div class="form-actions form-group"><button type="submit" class="btn btn-outline-success ">Salvar</button></div>
                    </form>
                </div>
            </div>
        </div>
     </div>        
@endsection