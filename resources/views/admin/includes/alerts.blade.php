<div class="alert">
	<p>Alert - {{ $content ?? '' }}</p> 
	{{-- Usando ?? evita a geração de erro, pois ira passar o conteudo vazio caso não haja um conteudo --}}
</div>