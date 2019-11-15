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
            @foreach ($servicos as $servico)
                <button type="button" class="btn btn-light btn-opcao js-btn-servico" data-id-servico="{{ $servico->id }}">
                    <span>{{ $servico->nome }}</span>
                </button>
            @endforeach
        </div>
    </div>

    <div id="selecionar-profissional" style="display: none">
        <label class="header-novo-agendamento">Selecione o profissional</label>
        <div class="opcoes-agendamento d-flex"></div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/agenda/novo-agendamento.js') }}"></script>
@endsection
