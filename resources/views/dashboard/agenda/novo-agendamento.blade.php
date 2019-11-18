@extends('layouts.dashboard')

@section('title', 'Novo Agendamento')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <h3>Novo Agendamento</h3>

    <div id="selecionar-servico">
        <label class="header-novo-agendamento">Selecione o serviço</label>
        <div class="opcoes-agendamento d-flex">
            @if (count($servicos) > 0)
                @foreach ($servicos as $servico)
                    <button type="button" class="btn btn-light btn-opcao js-btn-servico" data-id-servico="{{ $servico->id }}">
                        <span>{{ $servico->nome }}</span>
                    </button>
                @endforeach
            @else
                <div class="alert alert-info" role="alert">
                    Nenhum serviço encontrado.
                </div>
            @endif
        </div>
    </div>

    <div id="selecionar-profissional" style="display: none">
        <label class="header-novo-agendamento">Selecione o profissional</label>
        <div class="opcoes-agendamento d-flex"></div>
    </div>

    <div id="selecionar-horario" style="display: none">
        <label class="header-novo-agendamento">Selecione o horário</label>
        <div class="horarios-disponiveis"></div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/agenda/novo-agendamento.js') }}"></script>
@endsection
