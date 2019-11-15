@extends('layouts.dashboard')

@section('title', 'Novo Agendamento')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <h3>Novo Agendamento</h3>

    <div class="row mt-4">
        <div class="col">
            <div class="form-group">
                <label for="servico">Selecione o serviço</label>
                <select class="browser-default custom-select" id="servico" name="servico">
                    <option></option>
                    @foreach ($servicos as $servico)
                        <option value="{{ $servico->id }}">{{ $servico->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="profissional">Selecione o profissional</label>
                <select class="browser-default custom-select" id="profissional" name="profissional">
                    <option></option>
                    @foreach ($profissionais as $profissional)
                        <option value="{{ $profissional->id }}">{{ $profissional->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="profissional">Selecione o profissional</label>
                <select class="browser-default custom-select" id="profissional" name="profissional">
                    <option></option>
                    @foreach ($profissionais as $profissional)
                        <option value="{{ $profissional->id }}">{{ $profissional->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/agenda/novo-agendamento.js') }}"></script>
@endsection
