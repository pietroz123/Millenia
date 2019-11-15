@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
<div class="d-flex justify-content-between w-100">
        <div>
            <h3>Serviços</h3>
            <p>Número de Serviços: {{ count($servicos) }}</p>
        </div>
        <div>
            <a href="{{ route('servicos.create') }}" class="btn btn-light btn-tool add">Adicionar um serviço</a>
        </div>
    </div>

    @if (count($servicos) > 0)
        <table class="table table-cadastro">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ativo</th>
                    <th>Preço</th>
                    <th>Tempo de Execução (min)</th>
                    <th>Pontos</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicos as $servico)
                    <tr>
                        <td>{{ $servico->nome }}</td>
                        <td>{{ $servico->ativo ? 'Sim' : 'Não' }}</td>
                        <td>{{ $servico->preco }}</td>
                        <td>{{ $servico->tempo_execucao_em_minutos }}</td>
                        <td>{{ $servico->pontos }}</td>
                        <td class="td-actions">
                            <button class="btn-action view" data-id-servico="{{ $servico->id }}"><i class="fas fa-eye"></i></button>
                            <a href="{{ route('servicos.edit', $servico->id) }}" class="btn-action"><i class="fas fa-pencil-alt"></i></a>
                            <form method="POST" action="{{ route('servicos.destroy', $servico->id) }}" class="remove-form" onsubmit="return confirm('Você realmente quer remover este serviço?');">
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
            Nenhum serviço foi cadastrado ainda. Você pode cadastrar um clicando no botão acima.
        </div>
    @endif

    <!-- Modal -->
    <div class="modal fade modal-view" id="modal-servico" tabindex="-1" role="dialog" aria-labelledby="modal-servico-label"
    aria-hidden="true">
        {{-- Preenchido com AJAX --}}
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/servico/index.js') }}"></script>
@endsection