@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')
	<h1>Exibindo os produtos</h1>
<a href="{{route('product.create')}}">Cadastrar</a>
<hr>

@component('admin.components.card')
@slot('title')
	<h1>Titulo Card</h1>
@endslot
	Um card de exemplo
@endcomponent
	
<hr>

@include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

<hr>

@if ($teste === '123') 
	É igual
@else
é diferente
@endif

@endsection


@push('styles')
	<style>
		.last {background: #CCC;}
	</style>
@endpush

@push('scripts')
	<script type="text/javascript">
		document.body.style.background = '#999'
	</script>
@endpush

