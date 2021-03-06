@extends('layout.master')
@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Criar Produto e Serviço</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="/produtos">
                      {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                            <label for="descricao" class="col-md-4 control-label">Descrição</label>
                            <div class="col-md-6">
                                <input id="descricao" type="text" class="form-control" name="descricao" value="" required autofocus>
                                @if ($errors->has('descricao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descricao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('valorUnit') ? ' has-error' : '' }}">
                            <label for="valorUnit" class="col-md-4 control-label">Valor</label>
                            <div class="col-md-6">
                                <input id="valorUnit" type="text" class="form-control" name="valorUnit" value="" required autofocus>
                                @if ($errors->has('valorUnit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('valorUnit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <input type="button" class="btn btn-primary" href="/produtos" value="Voltar" onClick="JavaScript: window.history.back();">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
