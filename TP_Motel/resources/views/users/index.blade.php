@extends('layout.master')

@section('conteudo')

<title>Sistema Motel</title>
<h1>Lista de Usuários</h1>

<a href="/users/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>E-mail</th>
      <th>Tipo</th>
      <th>Editar?</th>
    </tr>
  </thead>

  @foreach ($users as $u)
  <tr>
    <td>{{$u->id}}</td>
    <td><a href="/users/{{ $u->id }}">{{ $u->nome }}</a></td>
    <td>{{$u->telefone}}</td>
    <td>{{$u->email}}</td>
    <td>
        @if($u->tipo == 1) Funcionário @endif
        @if($u->tipo == 2) Cliente @endif
    </td>
    <td> <a class="btn btn-primary fa fa-edit" href="/users/{{ $u->id }}/edit">  Editar</a> </td>
  </tr>
  @endforeach
</table>
@stop
