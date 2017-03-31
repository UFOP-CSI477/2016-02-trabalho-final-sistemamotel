@extends('layout.master')

@section('conteudo')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuário</div>
                <div class="panel-body">

                    <form method="post" action="/users/{{ $user->id }}">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id" class="col-md-4 control-label">ID</label>
                            <div class="col-md-6">
                                <label for="ID" class="col-md-4 control-label">{{ $user->id }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nome" class="col-md-4 control-label">Nome</label>
                            <div class="col-md-6">
                                <label for="nome" class="col-md-4 control-label">{{ $user->nome }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telefone" class="col-md-4 control-label">Telefone</label>
                            <div class="col-md-6">
                                <label for="telefone" class="col-md-4 control-label">{{ $user->telefone }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">e-Mail</label>
                            <div class="col-md-6">
                                <label for="email" class="col-md-4 control-label">{{ $user->email }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tipo" class="col-md-4 control-label">Tipo</label>
                            <div class="col-md-6">
                                <label for="tipo" class="col-md-4 control-label">@if($user->tipo == 1) Funcionário @endif
                                @if($user->tipo == 2) Cliente @endif </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/users/{{ $user->id }}/edit" class="btn btn-primary">Editar</a>
                                <input type="submit" class="btn btn-danger" value="Excluir"/>
                                <a href="/users" class="btn btn-primary">Voltar</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
