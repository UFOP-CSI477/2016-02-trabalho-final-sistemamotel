@extends('layout.master')

@section('conteudo')

<title>Sistema Motel</title>
<h1>Dados das Hospedagens</h1>

<a href="/hospedagens/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Clientes</th>
      <th>Apartamentos</th>
      <th>Produtos e Serviços</th>
      <th>Total</th>
      <th>Editar?</th>
      <th>Excluir?</th>
    </tr>
  </thead>

  @foreach ($dados as $d)
  <tr>
	<form method="post" action="/hospedagens/{{$d->h_id}}">
            {{method_field('DELETE')}}
            {{csrf_field()}}

	    <td>{{ $d->h_id}}</td>
            <td><a href="/users/{{$d->id_user}}">{{ $d->nome_user}}</a><br></td>
            <td><a href="/apartamentos/{{$d->ap_id}}">{{ $d->adesc}}</a><br></td>
            <td><a href="/produtos/{{$d->p_id}}">{{ $d->pdesc}}</a><br></td>
            <td>{{ $d->pval}}</td>

	    <td> <a class="btn btn-primary fa fa-edit" href="/hospedagens/{{ $d->h_id }}/edit">  Editar </a> </td>
            <td> <button type="submit" class="btn btn-danger fa fa-eraser"> Excluir </button>
    </form>
  </tr>

  @endforeach
</table>
<a href="/hospedagens" class="btn btn-primary fa fa-mail-reply"> Voltar </a>
@stop