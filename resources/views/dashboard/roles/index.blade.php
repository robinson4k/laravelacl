@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Lista de Papéis</h1>
		<div class="row">
            <div class="col-md-12">
    			<table class="table table-striped table-condensed">
    				<thead>
    					<tr>
    						<th>Id</th>
    						<th>Nome</th>
    						<th>Descrição</th>
    						<th>Ação</th>
    					</tr>
    				</thead>
    				<tbody>
    				@foreach($roles as $role)
    					<tr>
    						<td>{{ $role->id }}</td>
    						<td>{{ $role->name }}</td>
    						<td>{{ $role->description }}</td>
    						<td>
    							<form action="{{route('roles.destroy',$role->id)}}" method="post">
    								<a title="Editar" class="btn orange" href="{{ route('roles.edit',$role->id) }}">Editar</a>
    								<a title="Permissões" class="btn" href="#">Permissão</a>
    								{{ method_field('DELETE') }}
    								{{ csrf_field() }}
    								<button title="Deletar" class="btn btn-danger"><i class="material-icons">delete</i></button>
    							</form>
    						</td>
    					</tr>
    				@endforeach
    				</tbody>
    			</table>
            </div>
		</div>
		<div class="row">
			<a class="btn btn-success btn-block" href="{{route('roles.create')}}">Adicionar</a>
		</div>
	</div>
@endsection