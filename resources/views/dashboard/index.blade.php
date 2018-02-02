@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>dashboard</h1>
        <div class="row">
            <div class="col-sm-6">
                <a href="{{ route('users.index') }}" class="btn btn-info btn-lg btn-block">Usuários</a>
            </div>
			<div class="col-sm-6">
                <a href="{{ route('users.index') }}" class="btn btn-info btn-lg btn-block">Usuários 2</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('roles.index') }}" class="btn btn-default btn-lg btn-block">Papéis</a>
            </div>
        </div>
    </div>
@endsection
