@extends('layout')
@section('titulo-pagina')
@endsection
@section('navbar')
@endsection
@section('conteudo')
Formulário enviado!

<div style="background-color: white ; height: 80px; width: 700px">
<b>Nome:&nbsp &nbsp </b> {{$nome}}<br>
<b>Morada: &nbsp &nbsp</b>{{$morada}}<br>
<b>Nº Telemovel: &nbsp &nbsp</b> {{$telemovel}}<br>
</div>
@endsection
@section('rodape')
@endsection


