@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    
    <div class="dashboard-logo">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/icons/logo.svg') }}" class="navbar-brand-logo" alt="Ícone Millenia">
            <span class="brand">Millenia</span>
        </a>
    </div>

    <hr>
    
    <div class="user-info">
        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" class="rounded-circle user-image" alt="">
        <div class="d-flex flex-column justify-content-center ml-3">
            <span class="user-name">{{ Auth::user()->name }}</span>
            <span class="user-job">Cabeleireiro</span>
        </div>
    </div>

    <hr>

    <div>

        <span class="dashboard-sidebar-divider">Navegação</span>
        <ul class="dashboard-sidebar-items">
            <li class="dashboard-sidebar-item">
                <a href="#!">
                    <i class="far fa-calendar-alt"></i>
                    Agenda
                </a>
            </li>
            <li class="dashboard-sidebar-item">
                <a href="#!">
                    <i class="fas fa-address-card"></i>
                    Cadastros
                </a>
            </li>
            <li class="dashboard-sidebar-item">
                <a href="#!">
                    <i class="fas fa-user"></i>
                    Clientes
                </a>
            </li>
            <li class="dashboard-sidebar-item">
                <a href="#!">
                    <i class="fas fa-users"></i>
                    Profissionais
                </a>
            </li>
            <li class="dashboard-sidebar-item">
                <a href="#!">
                    <i class="fas fa-box-open"></i>
                    Produtos
                </a>
            </li>
            <li class="dashboard-sidebar-item">
                <a href="#!">
                    <i class="fas fa-cut"></i>
                    Serviços
                </a>
            </li>
            <li class="dashboard-sidebar-item">
                <a href="#!">
                    <i class="fas fa-chart-pie"></i>
                    Relatórios
                </a>
            </li>
        </ul>

        <span class="dashboard-sidebar-divider">Dados Gerais</span>
        <ul class="dashboard-sidebar-items">
            <li class="dashboard-sidebar-item">
                <a href="#!">
                    <i class="far fa-address-card"></i>
                    Dados Cadastrais
                </a>
            </li>
            <li class="dashboard-sidebar-item">
                <a href="#!">
                    <i class="fas fa-cog"></i>
                    Configurações
                </a>
            </li>
            <li class="dashboard-sidebar-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>


    </div>

@endsection

@section('dashboard-content')
    
    <h3>Dashboard de {{ Auth::user()->name }}</h3>

@endsection
