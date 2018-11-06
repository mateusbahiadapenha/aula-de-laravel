@extends('leyout')
@section('conteudo-principal')
<table>
	<thead>
	<tr>
		<th>#</th>
		<th>nome</th>
		<th>descriçao</th>
		<th>quantidade</th>
	</tr>
	</thead>
	<tbody>
		@foreach($produtos as $produto)
		<tr>
			<td>{{$produto['id']}}</td>
			<td>{{$produto['nome']}}</td>
			<td>{{$produto['descricao']}}</td>
			<td>{{$produto['quantidade']}}</td>

			<td 
			@if($produto ['preco'] < 2 )
             style="background-color: red"
             
           @else

           style="background-color: green"

            @endif
			>

			{{$produto['preco']}}
		</td>
			
			<td >
				<a href="#">editar</a>
				<button>Deletar</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop