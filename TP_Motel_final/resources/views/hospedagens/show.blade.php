@extends('layout.master')

@section('conteudo')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Hospedagens</div>
                <div class="panel-body">

                    <form method="post" action="/hospedagens/{{ $hospedagem->id }}">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id" class="col-md-4 control-label">ID</label>
                            <div class="col-md-6">
                                <label for="ID" class="col-md-4 control-label">{{ $hospedagem->id }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="users_id" class="col-md-4 control-label">Clientes</label>
                            <div class="col-md-6">
                                <label for="users_id" class="col-md-4 control-label">{{ $hospedagem->users_id }}</label>
                            </div>
                        </div>

						
                        <div class="form-group">
                            <label for="apartamentos_id" class="col-md-4 control-label">Apartamentos</label>
                            <div class="col-md-6">
                                <label for="apartamentos_id" class="col-md-4 control-label">{{ $hospedagem->apartamentos_id }}</label>
                            </div>
                        </div>

						
                        <div class="form-group">
                            <label for="produtos_id" class="col-md-4 control-label">Produtos e Serviços</label>
                            <div class="col-md-6">
                                <label for="produtos_id" class="col-md-4 control-label">{{ $hospedagem->produtos_id }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="total" class="col-md-4 control-label">Total</label>
                            <div class="col-md-6">
                                <label for="total" class="col-md-4 control-label">{{ $hospedagem->total }}</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/hospedagens/{{ $hospedagem->id }}/edit" class="btn btn-primary">Editar</a>
                                <input type="submit" class="btn btn-danger" value="Excluir"/>
                                <a href="/hospedagens" class="btn btn-primary">Voltar</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
