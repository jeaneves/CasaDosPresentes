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
                    <form action="{{ route('categoria.update', $categoria->id) }}" method="POST" >
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-id-card-o"></i></div>
                                <input type="text" id="nomecategoria" name="nome" class="form-control" value="{{$categoria->nome}}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-file-text-o"></i></div>
                                <input type="text" id="descricao" name="descricao" placeholder="Descricao Categoria" class="form-control" value=" {{ $categoria->descricao }}">
                                
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-camera-retro"></i></div>
                                <input type="text" id="imagemslide" name="imagem_slide" placeholder="Imagem do Slide" class="form-control" value=" {{ $categoria->imagem_slide }}">
                                <button><i class="fa fa-cloud-upload"></i></button>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-picture-o"></i></div>
                                <input type="text" id="imagembanner" name="imagem" placeholder="Imagem do Banner" class="form-control" value= "{{ $categoria->imagem }}"> 
                                <button><i class="fa fa-cloud-upload"></i></button>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="MostraSlide" class="control-label mb-1">Aparece Slide</label>
                            
                            <label class="switch switch-text switch-primary switch-pill" >
                                @if($categoria->apareceslide = 1)
                                  <input type="checkbox" name="apareceslide" class="switch-input" checked="1"  value=" {{ $categoria->apareceslide }}" {{ old('apareceslide') ? 'checked="checked"'  :  '' }}> 
                                @else 
                                  <input type="checkbox" name="apareceslide" class="switch-input" {{ old('apareceslide') ? 'checked="checked"'  :  '' }}> 
                                @endif
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