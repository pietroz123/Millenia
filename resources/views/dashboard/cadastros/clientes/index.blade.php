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
    
    <div class="crud-tool-bar">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <input type="text" name="buscar-cliente" id="buscar-cliente" class="form-control" placeholder="Buscar cliente...">
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
                            <button class="btn-action view" data-id-cliente="{{ $cliente->id }}"><i class="fas fa-eye"></i></button>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn-action"><i class="fas fa-pencil-alt"></i></a>
                            <form method="POST" action="{{ route('clientes.destroy', $cliente->id) }}" class="remove-form" onsubmit="return confirm('Você realmente quer remover este cliente?');">
                                @method('DELETE')
                                @csrf
                                <button class="btn-action"><i class="fas fa-trash-alt"></i></button>
                            </form>
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
    <div class="modal fade modal-view" id="modal-cliente" tabindex="-1" role="dialog" aria-labelledby="modal-cliente-label"
    aria-hidden="true">
        {{-- Preenchido com AJAX --}}
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/cliente/index.js') }}"></script>
@endsection
