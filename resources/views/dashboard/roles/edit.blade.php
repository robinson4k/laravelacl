@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Papel</h2>
	<div class="row">
		<form action="{{ route('roles.update',$role->id) }}" method="post">

		{{csrf_field()}}
		{{ method_field('PUT') }}
		@include('dashboard.roles._form')

		<button class="btn blue">Atualizar</button>


		</form>

	</div>

</div>


@endsection