@extends('admin.layouts.app')

@section('title', 'Editar Produto')

@section('content')
<h1>Editar Produto {{ $id }} </h1>

<form action="{{ route('product.update', $id) }}" method="post">
	@method('PUT') <!-- Para dizer que esse verbo http é do tipo put -->
	@csrf
	<input type="text" name="name" placeholder="Nome:">
	<input type="text" name="description" placeholder="Descrição:">
	<button type="submit">Enviar</button>
</form>
@endsection