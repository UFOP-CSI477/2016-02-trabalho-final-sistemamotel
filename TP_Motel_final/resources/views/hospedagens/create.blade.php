@extends('layout.master')
@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Criar Hospedagem</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="/hospedagens">
                      {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('users_id') ? ' has-error' : '' }}">
                            <label for="users_id" class="col-md-4 control-label">Cliente</label>
                            <div class="col-md-6">
                                <select id="users_id" name="users_id" class="form-control" required>
                                    @foreach($users as $u)
                                        <option value="{{ $u->id }}">{{ $u->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apartamentos_id') ? ' has-error' : '' }}">
                            <label for="apartamentos_id" class="col-md-4 control-label">Apartamentos</label>
                            <div class="col-md-6">
				@if(strlen($apartamentos) > 2)
		                        <select id="apartamentos_id" name="apartamentos_id" class="form-control" required>
				            @foreach($apartamentos as $a)
				                <option value="{{ $a->id }}">{{ $a->descricao }}</option>
				            @endforeach
		                        </select>
				@else
					Não há quartos disponíveis
				@endif
                            </div>
                        </div>

						 <!--   <div class="form-group{{ $errors->has('id_produto') ? ' has-error' : '' }}">
                            <label for="id_produto" class="col-md-4 control-label">Produtos e Serviços</label>
                            <div class="col-md-6">
                                <select id="id_produto" name="id_produto" class="form-control" required>
                                    @foreach($produtos as $p)
                                        <option value="{{ $p->id }}">{{ $p->descricao }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> -->
				  
                  
                  <input type="hidden" name="produtos_id" value="1">
                  <input type="hidden" name="total" value="0"> 

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <input type="button" class="btn btn-primary" href="/hospedagens" value="Voltar" onClick="JavaScript: window.history.back();">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection