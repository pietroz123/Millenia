@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div class="d-flex justify-content-between w-100">
        <div>
            <h3>Pacotes</h3>
            <p>Número de Pacotes: </p>
        </div>
        <div>
            <a href="{{ route('pacotes.create') }}" class="btn btn-light btn-tool add">Adicionar um Pacote</a>
        </div>
    </div>


@endsection