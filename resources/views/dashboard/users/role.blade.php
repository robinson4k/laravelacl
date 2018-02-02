@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Lista de papéis para {{ $user->name }}</h1>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.role.store', $user->id) }}" method="post">
                    {{ csrf_field() }}
                    <select name="role_id" id="role_id" class="form-control">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-default">Adicionar</button>
                </form>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->description }}</td>
                                    <td>
                                        <form action="{{ route('users.role.destroy', [$user->id, $role->id]) }}" method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection