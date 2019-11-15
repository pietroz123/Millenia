@extends('layouts.dashboard')

@section('title', 'Agenda Home')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <h3 class="mb-5">Opções da Agenda</h3>

    <div class="opcoes-agenda">
        <a href="{{ route('agenda.novoAgendamento') }}" class="opcao-agenda">
            <i class="far fa-calendar-plus"></i>
            <span>Adicionar um agendamento</span>
        </a>
        <a href="{{ route('agenda.calendario') }}" class="opcao-agenda">
            <i class="far fa-calendar-alt"></i>
            <span>Visualizar agenda</span>
        </a>
    </div>

@endsection
