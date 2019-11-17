@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div class="d-flex justify-content-between w-100">
        <div>
            <h3>Pacotes</h3>
            <p>Número de Pacotes:  {{ count($pacotes) }} </p>
        </div>
        <div>
            <a href="{{ route('pacotes.create') }}" class="btn btn-light btn-tool add">Adicionar um Pacote</a>
        </div>
    </div>

    @if (count($pacotes) > 0)
        <table class="table table-cadastro">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Valor (Original)</th>
                    <th>Desconto (%)</th>
                    <th>Valor (Final)</th>
                    <th>Serviços</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacotes as $pacote)
                    <tr>
                        <td>{{ $pacote->nome }}</td>
                        <td>{{ $pacote->valor_sem_desconto }}</td>
                        <td>{{ $pacote->desconto }}</td>
                        <td>{{ $pacote->valor_com_desconto }}</td>
                        <td>
                            @foreach ($pacote->servicos as $servico)
                                <span class="badge badge-light">{{ $servico->nome }}</span>
                            @endforeach    
                        </td>
                        <td class="td-actions">
                            <button class="btn-action view" data-id-pacote="{{ $pacote->id }}"><i class="fas fa-eye"></i></button>
                            <a href="{{ route('pacotes.edit', $pacote->id) }}" class="btn-action"><i class="fas fa-pencil-alt"></i></a>
                            <form method="POST" action="{{ route('pacotes.destroy', $pacote->id) }}" class="remove-form" onsubmit="return confirm('Você realmente quer remover este pacote?');">
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
            Nenhum pacote foi cadastrado ainda. Você pode cadastrar um clicando no botão acima.
        </div>
    @endif

    <!-- Modal -->
    <div class="modal fade modal-view" id="modal-pacote" tabindex="-1" role="dialog" aria-labelledby="modal-pacote-label"
    aria-hidden="true">
        {{-- Preenchido com AJAX --}}
    </div>    


@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/pacote/index.js') }}"></script>
@endsection
