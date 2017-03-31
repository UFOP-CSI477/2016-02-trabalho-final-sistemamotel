@extends('layout.master')

@section('conteudo')

<title>Sistema Motel</title>
<h1>Dados dos Apartamentos</h1>

<a href="/apartamentos/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Descrição</th>
      <th>Status</th>
      <th>Valor</th>
      <th>Editar?</th>
    </tr>
  </thead>

  @foreach ($apartamentos as $a)
  <tr>
    <td>{{ $a->id}}</td>
    <td><a href="/apartamentos/{{$a->id}}">{{ $a->descricao}}</a><br></td>
    <td>
      @if($a->ocupado == 0) Disponível @endif
      @if($a->ocupado == 1) Em uso @endif
    </td>

    <td>{{ $a->valor}}</td>
    <td> <a class="btn btn-primary fa fa-edit" href="/apartamentos/{{ $a->id }}/edit">  Editar</a> </td>
  </tr>
  @endforeach
</table>
@stop
