@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <h3>Dashboard de {{ Auth::user()->name }}</h3>

    <div class="d-flex flex-row mt-5">

        <div class="info-card">
            <span class="name">Clientes (<a href="{{ route('clientes.index') }}">visualizar</a>)</span>
            <span class="value">16 clientes</span>
            {{-- <span>
                <span class="stats">
                    <span class="stats-value decrease">0.1%</span>
                </span>
                <span class="stats-info">Desde o último mês</span>
            </span> --}}
        </div>

    </div>

@endsection
