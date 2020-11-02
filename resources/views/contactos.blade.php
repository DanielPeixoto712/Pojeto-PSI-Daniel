@extends('layout')
@section('titulo-pagina')
@endsection

@section('navbar')
@endsection

@section('menupr')
@endsection


@section('rodape')

<form al method="post" action="{{route('processar.form')}}">
	@csrf
	<label for="nome"><h2 style="color: red">Nome</h2></label>
	<input type="text" name="nome">
	<br>

	<label for="Morada"><h2 style="color: red">Morada</h2></label>
	<input type="text" name="morada">
	<br>

	<label for="NºTelemovel"><h2 style="color: red">Nº Telemovel</h2></label>
	<input type="text" name="telemovel">
	<br>

	<br>
	<button type="submit">Enviar</button>
</form>

@endsection
