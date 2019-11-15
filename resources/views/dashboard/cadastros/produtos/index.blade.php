@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div class="d-flex justify-content-between w-100">
        <div>
            <h3>Produtos</h3>
            <p>Número de Produtos: {{ count($produtos) }}</p>
        </div>
        <div>
            <a href="{{ route('produtos.create') }}" class="btn btn-light btn-tool add">Adicionar um Produto</a>
        </div>
    </div>

    @if (count($produtos) > 0)
        <table class="table table-cadastro">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Pontos</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->marca->nome }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->pontos }}</td>
                        <td class="td-actions">
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn-action"><i class="fas fa-pencil-alt"></i></a>
                            <form method="POST" action="{{ route('produtos.destroy', $produto->id) }}" class="remove-form" onsubmit="return confirm('Você realmente quer remover este produto?');">
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
            Nenhum produto foi cadastrado ainda. Você pode cadastrar um clicando no botão acima.
        </div>
    @endif


@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/produto/index.js') }}"></script>
@endsection