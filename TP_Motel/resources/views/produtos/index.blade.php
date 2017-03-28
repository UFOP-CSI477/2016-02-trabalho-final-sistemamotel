@extends('layout.master')

@section('conteudo')

<title>Sistema Motel</title>
<h1>Dados dos Produtos</h1>

<a href="/produtos/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Descrição</th>
      <th>Valor</th>
      <th>Editar?</th>
    </tr>
  </thead>

  @foreach ($produtos as $p)
  <tr>
    <td>{{ $p->id}}</td>
    <td><a href="/produtos/{{$p->id}}">{{ $p->descricao}}</a><br></td>
    <td>{{ $p->valorUnit}}</td>
    <td> <a class="btn btn-primary fa fa-edit" href="/produtos/{{ $p->id }}/edit">  Editar</a> </td>
  </tr>
  @endforeach
</table>
@stop
