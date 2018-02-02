@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Papel</h2>

	<div class="row">
		<form action="{{ route('roles.store') }}" method="post">

		{{csrf_field()}}
		@include('dashboard.roles._form')

		<button class="btn green">Adicionar</button>


		</form>

	</div>

</div>


@endsection