@extends('layouts.dashboard')


@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
        @method('PUT')
        @csrf

        <h3>Edição de Cliente ({{ $cliente->nome }})</h3>
        
        @include('dashboard.cadastros.clientes._form')
        
        <button type="submit" class="btn btn-light btn-tool float-right mt-4">Editar cliente</button>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/cliente/create.js') }}"></script>
@endsection
