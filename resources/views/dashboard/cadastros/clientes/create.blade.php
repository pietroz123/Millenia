@extends('layouts.dashboard')


@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('clientes.store') }}">
        @csrf

        <h3>Cadastro de Cliente</h3>
        
        @include('dashboard.cadastros.clientes._form')
        
        <button type="submit" class="btn btn-primary btn-tool float-right mt-4">Cadastrar</button>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/cliente/create.js') }}"></script>
@endsection
