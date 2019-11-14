@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div class="d-flex justify-content-between w-100">
        <div>
            <h3>Clientes</h3>
            <p>Número de Clientes: {{ count($clientes) }}</p>
        </div>
        <div>
            <a href="{{ route('clientes.create') }}" class="btn btn-light btn-tool add">Adicionar um cliente</a>
        </div>
    </div>

    @if (count($clientes) > 0)
        <table class="table table-cadastro">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->telefone_celular }}</td>
                        <td>{{ $cliente->telefone_residencial }}</td>
                        <td class="td-actions">
                            <button class="btn-action"><i class="fas fa-pencil-alt"></i></button>
                            <button class="btn-action"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info" role="alert">
            Nenhum cliente foi cadastrado ainda. Você pode cadastrar um clicando no botão acima.
        </div>
    @endif

@endsection
