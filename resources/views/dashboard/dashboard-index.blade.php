@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <h3>Bem-vindo de volta {{ Auth::user()->name }}</h3>

    <div class="d-flex flex-row mt-4 flex-wrap">

        <div class="info-card">
            <span class="name">Clientes (<a href="{{ route('clientes.index') }}">Visualizar</a>)</span>
            <span class="value">{{ $n_clientes }} clientes</span>
        </div>

        <div class="info-card">
            <span class="name">Profissionais (<a href="{{ route('profissionais.index') }}">Visualizar</a>)</span>
            <span class="value">{{ $n_profissionais }} profissionais</span>
        </div>

        <div class="info-card">
            <span class="name">Produtos (<a href="{{ route('produtos.index') }}">Visualizar</a>)</span>
            <span class="value">{{ $n_produtos }} produtos</span>
        </div>

        <div class="info-card">
            <span class="name">Serviços (<a href="{{ route('servicos.index') }}">Visualizar</a>)</span>
            <span class="value">{{ $n_servicos }} serviços</span>
        </div>

        <div class="info-card">
            <span class="name">Pacotes (<a href="{{ route('pacotes.index') }}">Visualizar</a>)</span>
            <span class="value">{{ $n_pacotes }} pacotes</span>
        </div>

        <div class="info-card">
            <span class="name">Agendamentos (<a href="{{ route('agenda.calendario') }}">Visualizar</a>)</span>
            <span class="value">{{ $n_agendamentos }} agendamentos</span>
        </div>

    </div>

@endsection
