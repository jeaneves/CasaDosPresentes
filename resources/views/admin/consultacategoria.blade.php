@extends('layouts.adminbase')

@section('main')
<div class="col-sm-12">

@if(session()->get('success'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Success</span>
        {{ session()->get('success') }}  
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Categorias</strong>
                            <div class="float-right">
                            <a href="{{ route('categoria.create')}}" class="btn btn-outline-primary"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        
                        
                        
                        <div class="card-body">
                            @if($categorias)
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Código</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Descrição</th>
                                            <th scope="col">Imagem Slide</th>
                                            <th scope="col">Imagem Banner</th>
                                            <th scope="col">Ações</th>
                                            
                                        </tr>
                                    </thead>
                                    @foreach($categorias as $cat)
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo $count?> <?php $count++;?></th>
                                                <td>{{$cat->id}}</td>
                                                <td>{{$cat->nome}}</td>
                                                <td>{{$cat->descricao}}</td>
                                                <td>{{$cat->imagem_slide}}</td>
                                                <td>{{$cat->imagem}}</td>
                                                <td>
                                                    <a href="{{ route('categoria.edit', $cat->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            
                                                </td>
                                                <td>
                                                    <form action="{{ route('categoria.destroy', $cat->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <!-- <button class="btn btn-outline-danger" type="submit"></button> -->
                                                        <button class="btn btn-outline-danger" type="submit" data-toggle="modal" data-target="#mediumModal"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection