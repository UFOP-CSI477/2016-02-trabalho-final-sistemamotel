@extends('layout.master')

@section('conteudo')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Produtos e Serviços</div>
                <div class="panel-body">

                    <form method="post" action="/produtos/{{ $produto->id }}">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id" class="col-md-4 control-label">ID</label>
                            <div class="col-md-6">
                                <label for="ID" class="col-md-4 control-label">{{ $produto->id }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="descricao" class="col-md-4 control-label">Descrição</label>
                            <div class="col-md-6">
                                <label for="descricao" class="col-md-4 control-label">{{ $produto->descricao }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="valorUnit" class="col-md-4 control-label">Valor</label>
                            <div class="col-md-6">
                                <label for="valorUnit" class="col-md-4 control-label">{{ $produto->valorUnit }}</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/produtos/{{ $produto->id }}/edit" class="btn btn-primary">Editar</a>
                                <input type="submit" class="btn btn-danger" value="Excluir"/>
                                <a href="/produtos" class="btn btn-primary">Voltar</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
