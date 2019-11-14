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
                            <button class="btn-action" data-toggle="modal" data-target="#modal-cliente"><i class="fas fa-eye"></i></button>
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

    <!-- Modal -->
    <div class="modal fade" id="modal-cliente" tabindex="-1" role="dialog" aria-labelledby="modal-cliente-label"
    aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-cliente-label">Dados do <span class="font-weight-bold">Pietro</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
