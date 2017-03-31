@extends('layout.master')
@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Hospedagem</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="/hospedagens/{{$hospedagem->id }}">
                      {{ method_field('PATCH') }}
                      {{ csrf_field() }}

                      <input type="hidden" name="id_hospedagem" value="{{$hospedagem->id }}">





                        <div class="form-group{{ $errors->has('id_produto') ? ' has-error' : '' }}">
                            <label for="id_produto" class="col-md-4 control-label">Produtos e Serviços</label>
                            <div class="col-md-6">
                                <select id="id_produto" name="id_produto" class="form-control" required>
                                    @foreach($produto as $p)
                                        <option value="{{ $p->id }}">{{ $p->descricao }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('quantidade') ? ' has-error' : '' }}">
                            <label for="quantidade" class="col-md-4 control-label">Quantidade</label>
                            <div class="col-md-6">
                                <select id="quantidade" name="quantidade" class="form-control" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>


                        <input type="hidden" name="id_hospedagem" value="{{$hospedagem->id }}">


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
